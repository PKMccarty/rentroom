<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use \App\Models\Jobrent;
use \App\Models\Roomtype;
use \App\Models\Roomtypesub;
use App\Models\dropdownsubroomtype;
use App\Models\dropdownroomtype;
use App\Models\Processsave;
use App\Models\User;
use App\Models\socketrooms;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function adminHome()
    {
        if (Auth::check()) {
        return view('admin.adminHome');
    } else {
        return view('home');
    }
    }
    public function tableview()
    {
        if (Auth::check()) {
        $job = Jobrent::join('roomtypesubs', 'jobrents.room_id', '=', 'roomtypesubs.id')
            ->join('statusrents', 'jobrents.status_id', '=', 'statusrents.id')
            ->join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->join('users', 'users.id', '=', 'jobrents.ward_id')
            ->select(
                'roomtypesubs.id as subid',
                'jobrents.id as jobid',
                'jobrents.*',
                'statusrents.*',
                'roomtypes.*',
                'roomtypesubs.*',
                'users.*'
            )
            ->get();
        $preroom = collect();
        $ddoctorromm = collect();
        foreach ($job as $jobRecord) {
            $roomtype = Roomtype::find($jobRecord->preroom_id);
            $preroom->push($roomtype);
        }
        foreach ($job as $doctor) {
            $doctorname = User::find($doctor->doctor_id);
            $ddoctorromm->push($doctorname);
        }
        $showsum = socketrooms::sum('socket');

        $showwardCount1 = Roomtypesub::join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->where('roomtypesubs.roomtype_id', 1)
            ->count();

        $showwardCount2 = Roomtypesub::join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->where('roomtypesubs.roomtype_id', 2)
            ->count();

        $showwardCount3 = Roomtypesub::join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->where('roomtypesubs.roomtype_id', 3)
            ->count();


        $showlesswardCount1 = Roomtypesub::join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->where('roomtypesubs.roomtype_id', 1)
            ->where('roomtypesubs.room_status', 0)
            ->count();

        $showlesswardCount2 = Roomtypesub::join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->where('roomtypesubs.roomtype_id', 2)
            ->where('roomtypesubs.room_status', 0)
            ->count();

        $showlesswardCount3 = Roomtypesub::join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->where('roomtypesubs.roomtype_id', 3)
            ->where('roomtypesubs.room_status', 0)
            ->count();

        return view('admin.tableview', compact('job', 'preroom', 'ddoctorromm', 'showsum', 'showwardCount1', 'showwardCount2', 'showwardCount3','showlesswardCount1','showlesswardCount2','showlesswardCount3'));
    } else {
        return view('home');
    }
    }
    public function cancel(Request $request)
    {
        if (Auth::check()) {
        $result = base64_decode($request->input('id'));
        $db = Jobrent::where('id', $result)->update(['status_id' => '3']);
        if (!empty($db)) {
            Session::flash('cancel', 'ยกเลิกรายการเรียบร้อย');
            return redirect()->route('tableview');
        } else {
            Session::flash('error', 'ยกเลิกรายการไม่สำเร็จกรุณาตรวจสอบ');
            return redirect()->route('tableview');
        }
    } else {
        return view('home');
    }
    }
    public function jobprocess($id)
    {
        if (Auth::check()) {
        $result = base64_decode($id);
        $job = Jobrent::join('roomtypesubs', 'jobrents.room_id', '=', 'roomtypesubs.id')
            ->join('statusrents', 'jobrents.status_id', '=', 'statusrents.id')
            ->join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->join('statuspatients', 'statuspatients.id', '=', 'jobrents.job_pa_status')
            ->join('users', 'users.id', '=', 'jobrents.ward_id')
            ->where('jobrents.id', $result)
            ->select(
                'roomtypesubs.id as subid',
                'statuspatients.*',
                'jobrents.id as jobid',
                'jobrents.*',
                'statusrents.*',
                'roomtypes.*',
                'roomtypesubs.*',
                'users.*',
                DB::raw('(SELECT users.name FROM users WHERE users.id = jobrents.doctor_id) as doctorname')
            )
            ->first();


        $preroom = Roomtype::where('id', $job->preroom_id)->first();
        $roomtypes = dropdownroomtype::where('id', '<>', 4)->get();

        $listdoctor = User::where('is_admin', 3)->get();
        
        return view('admin.jobprocess', compact('roomtypes', 'job', 'preroom','listdoctor'));
    } else {
        return view('home');
    }
    }
    public function getsubroomtype($id)
    {
        if (Auth::check()) {
        $subroomtypes = dropdownsubroomtype::where('roomtype_id', $id)
            ->where('room_status', 0)
            ->get(['id', 'room_subtype_name', 'room_number']);
        return response()->json($subroomtypes);
    } else {
        return view('home');
    }
    }
    public function processsave(Request $request)
    {
        if (Auth::check()) {
            if($request->input('doctorid') != '') {
        $dataToUpdate = [
            'room_id' => $request->input('subroomtype'),
            'status_id' => $request->input('status'),
            'doctor_id'=>$request->input('doctorid'),
            'accept_id' => '1',
        ];
        $dataToUpdate2 = [
            'room_status' => 1,
        ];
        $jobId = $request->input('jobid');
        $jobupdate = Processsave::where('id', $jobId)->update($dataToUpdate);
        if (!empty($jobupdate)) {
            Roomtypesub::where('id', $request->subroomtype)->update($dataToUpdate2);
            return redirect()->route('tableview')->with(['successs' => true]);
        }
    }
    else{
        Session::flash('error', 'กรุณาเลือก แพทย์');
        return redirect()->back();
    }
    } else {
        return view('home');
    }
    }
    public function boxcount()
    {
        if (Auth::check()) {
        $showsum = socketrooms::sum('socket');

        $showwardCount1 = Roomtypesub::join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->where('roomtypesubs.roomtype_id', 1)
            ->count();

        $showwardCount2 = Roomtypesub::join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->where('roomtypesubs.roomtype_id', 2)
            ->count();

        $showwardCount3 = Roomtypesub::join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->where('roomtypesubs.roomtype_id', 3)
            ->count();
        return view('main.boxcount', compact('showsum', 'showwardCount1', 'showwardCount2', 'showwardCount3'));
    } else {
        return view('home');
    }
    }
}
