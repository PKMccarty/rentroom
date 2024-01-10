<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use \App\Models\Jobrent;
use \App\Models\Roomtype;
use App\Models\dropdownsubroomtype;
use App\Models\dropdownroomtype;
use App\Models\Processsave;

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
	return view('admin.adminHome');
}
public function tableview() {
    $job = Jobrent::join('roomtypesubs', 'jobrents.room_type', '=', 'roomtypesubs.id')
        ->join('statusrents', 'jobrents.status_id', '=', 'statusrents.id')
        ->join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
        ->select('roomtypesubs.id as subid','jobrents.id as jobid', 'jobrents.*', 'statusrents.*', 'roomtypes.*', 'roomtypesubs.*')
        ->get();

    $preroom = collect();

    foreach ($job as $jobRecord) {
        $roomtype = Roomtype::find($jobRecord->preroom_id);
        $preroom->push($roomtype);
    }
    return view('admin.tableview', compact('job', 'preroom'));
}
public function cancel(Request $request){
    $result = base64_decode($request->input('id'));
    $db = Jobrent::where('id', $result)->update(['status_id' => '3']);
    if (!empty($db)) {
        Session::flash('cancel', 'ยกเลิกรายการเรียบร้อย');
        return redirect()->route('tableview');
    }else{
        Session::flash('error', 'ยกเลิกรายการไม่สำเร็จกรุณาตรวจสอบ');
        return redirect()->route('tableview');
    }
}
public function jobprocess($id){
    $result = base64_decode($id);
    $job = Jobrent::join('roomtypesubs', 'jobrents.room_type', '=', 'roomtypesubs.id')
        ->join('statusrents', 'jobrents.status_id', '=', 'statusrents.id')
        ->join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
        ->where('jobrents.id', $result)
        ->select('roomtypesubs.id as subid','jobrents.id as jobid', 'jobrents.*', 'statusrents.*', 'roomtypes.*', 'roomtypesubs.*')
        ->first();
        
    $preroom = Roomtype::where('id',$job->preroom_id)->first();
    $roomtypes = dropdownroomtype::where('id', '<>', 4)->get();
    return view('admin.jobprocess', compact('roomtypes','job','preroom'));
}
public function getsubroomtype($id)
    {
        $subroomtypes =dropdownsubroomtype::where('roomtype_id', $id)->get(['id', 'room_subtype_name']);
        return response()->json($subroomtypes);
    }
    public function processsave(Request $request){
        $dataToUpdate = [
            'room_type' => $request->input('subroomtype'),
            'status_id' => $request->input('status'),
        ];
        $jobId = $request->input('jobid');
        $jobupdate = Processsave::where('id', $jobId)->update($dataToUpdate);
        if (!empty($jobupdate)) {
            return redirect()->route('tableview')->with(['success' => true]);
        } else {
           
        }
       
    }
}
