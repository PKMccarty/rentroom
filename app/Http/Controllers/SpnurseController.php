<?php

namespace App\Http\Controllers;

use App\Models\Roomtype;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\socketrooms;
use App\Models\Jobrent;
use App\Models\Roomtypesub;
use App\Models\guidelinesadmits;
use App\Models\User;
use App\Models\wards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SpnurseController extends Controller
{
    //
    public function countroom()
    {
        if (Auth::check()) {
            $showcount = socketRooms::where("loginname", session('login_id'))->select('socket')->first();
            return view('spnurse.index', compact('showcount'));
        } else {
            return view('home');
        }
    }
    public function indexnurse()
    {
        if (Auth::check()) {
            $showjob = Jobrent::join('users', 'jobrents.doctor_id', '=', 'users.id')
                ->join('roomtypesubs', 'jobrents.room_id', '=', 'roomtypesubs.id')
                ->join('guidelinesadmits','guidelinesadmits.job_id','=', 'jobrents.id')
                ->join('statuspatients', 'jobrents.job_pa_status', '=', 'statuspatients.id')
                ->join('statusrents', 'jobrents.status_id', '=', 'statusrents.id')
                ->select('jobrents.id as jobid','jobrents.*','users.*','roomtypesubs.*','guidelinesadmits.*','statuspatients.*','statusrents.*')
                ->where ('ward_id', Auth::user()->id)
                ->get();
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

            return view('nurse.index', compact('showjob', 'showsum', 'showwardCount1', 'showwardCount2', 'showwardCount3', 'showlesswardCount1', 'showlesswardCount2', 'showlesswardCount3'));
        } else {
            return view('home');
        }
    }
    public function indexdoctor()
    {
        if (Auth::check()) {
            $showjob = Jobrent::select([
                'jobrents.id as jid',
                'jobrents.*',
                'users.*',
                'roomtypesubs.*',
                'statuspatients.*',
                'statusrents.*',
            ])
                ->join('users', 'jobrents.doctor_id', '=', 'users.id')
                ->join('roomtypesubs', 'jobrents.room_id', '=', 'roomtypesubs.id')
                ->join('statuspatients', 'jobrents.job_pa_status', '=', 'statuspatients.id')
                ->join('statusrents', 'jobrents.status_id', '=', 'statusrents.id')
                ->where('doctor_id', Auth::user()->id)
                ->get();

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
            return view('doctor.index', compact('showjob', 'showsum', 'showwardCount1', 'showwardCount2', 'showwardCount3', 'showlesswardCount1', 'showlesswardCount2', 'showlesswardCount3'));
        } else {
            return view('home');
        }
    }
    public function indexspnurse()
    {
        if (Auth::check()) {
            $showjob = socketrooms::select([
                'jobrents.id as jid',
                'jobrents.*',
                'roomtypesubs.*',
                'socketrooms.*',
            ])
                ->join('roomtypesubs', 'roomtypesubs.socket_id', '=', 'socketrooms.id')
                ->join('jobrents', 'jobrents.room_id', '=', 'roomtypesubs.id')
                ->where('socketrooms.loginname', Auth::user()->id)
                ->where('roomtypesubs.room_status', '=', 1)
                ->where('jobrents.status_id', '=', 2)
                ->get();
            $showjobempty = socketrooms::join('roomtypesubs', 'roomtypesubs.socket_id', '=', 'socketrooms.id')
                ->select('roomtypesubs.*', 'socketrooms.*')
                ->where('socketrooms.loginname', '=', Auth::user()->id)
                ->where('roomtypesubs.room_status', '=', 0)
                ->get();

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

            $ddoctorromm = collect();

            foreach ($showjob as $doctor) {
                $doctorname = User::find($doctor->doctor_id);
                $ddoctorromm->push($doctorname);
            }
            return view('spnurse.index', compact('showjobempty', 'showjob', 'showsum', 'showwardCount1', 'showwardCount2', 'showwardCount3', 'showlesswardCount1', 'showlesswardCount2', 'showlesswardCount3', 'ddoctorromm'));
        } else {
            return view('home');
        }
    }
    public function doctorsave($id, $count)
    {
        if (Auth::check()) {
            if ($count == 1) {
                $dataToUpdate = [
                    'accept_id' => $count,
                ];
                $showjob = Jobrent::where('id', $id)->update($dataToUpdate);
                Session::flash('success', 'อนุมัติเรียบร้อย');
                return redirect()->route('doctor');
            } else if ($count == 2) {
                $dataToUpdate = [
                    'accept_id' => $count,
                    'status_id' => 3,
                ];
                $showjob = Jobrent::where('id', $id)->update($dataToUpdate);
                Session::flash('success', 'ยกเลิกอนุมัติ');
                return redirect()->route('doctor');
            } else {
                Session::flash('error', 'มีข้อผิดพลาด');
                return redirect()->route('doctor');
            }
        } else {
            return view('home');
        }
    }
    public function countward()
    {
        if (Auth::check()) {

            $roomsType0 = Roomtypesub::join('socketrooms', 'socketrooms.id', '=', 'roomtypesubs.socket_id')
                ->join('wards', 'wards.id', '=', 'socketrooms.ward')
                ->groupBy('roomtypesubs.socket_id', 'wards.name', 'roomtypesubs.type_id', 'roomtypesubs.room_subtype_price', 'roomtypesubs.room_subtype_nurse_price')
                ->select('wards.name', DB::raw('COUNT(roomtypesubs.socket_id) AS room'), 'roomtypesubs.type_id', 'roomtypesubs.room_subtype_price', 'roomtypesubs.room_subtype_nurse_price')
                ->orderBy('roomtypesubs.room_subtype_price', 'DESC') // Add this line to order by the 'id' column in descending order
                ->get();


            $roomsType1 = Roomtypesub::join('socketrooms', 'socketrooms.id', '=', 'roomtypesubs.socket_id')
                ->join('wards', 'wards.id', '=', 'socketrooms.ward')
                ->groupBy('roomtypesubs.socket_id', 'wards.name', 'roomtypesubs.type_id', 'roomtypesubs.room_subtype_price', 'roomtypesubs.room_subtype_nurse_price')
                ->select('wards.name', DB::raw('COUNT(roomtypesubs.socket_id) AS room'), 'roomtypesubs.type_id', 'roomtypesubs.room_subtype_price', 'roomtypesubs.room_subtype_nurse_price')->get();

            return view('main.countward', compact('roomsType0', 'roomsType1'));
        } else {
            return view('home');
        }
    }

    public function discharge(Request $request)
    {
        if (Auth::check()) {
            $job = Jobrent::where('id', $request->input('id'))->update(['status_id' => 4, 'job_discharge' => Carbon::now()]);
            $room = Roomtypesub::where('id', $request->input('roomno'))->update(['room_status' => 0]);
            if (!empty($job) && !empty($room)) {
                Session::flash('success', 'ผู้ป่วย Discharge แล้ว');
                return redirect()->route('spnurse');
            } else {
                Session::flash('error', 'ผู้ป่วย Discharge ไม่สำเร็จ');
                return redirect()->route('spnurse');
            }
        } else {
            return view('home');
        }
    }
    public function acceptnurse($id,$values)
    {
        if (Auth::check()) {
            if($values=='1')
            {
                $job = Jobrent::where('id', $id)->update(['accept_id' => 1]);
                $gui = guidelinesadmits::where('job_id', $id)->update(['bypass' => 1]);
                if (!empty($job) && !empty($gui)) {
                    Session::flash('success', 'อนุมัติสำเร็จ');
                    return redirect()->route('nurse');
                } else {
                    Session::flash('error', 'อนุมัติไม่สำเร็จ');
                    return redirect()->route('nurse');
                }
            }
            else{
                $job = Jobrent::where('id', $id)->update(['accept_id' => 2 , 'status_id' => 3]);
                $gui = guidelinesadmits::where('job_id', $id)->update(['bypass' => 3]);
                if (!empty($job) && !empty($gui)) {
                    Session::flash('success', 'ยกเลิก อนุมัติสำเร็จ');
                    return redirect()->route('nurse');
                } else {
                    Session::flash('error', 'ยกเลิก อนุมัติไม่สำเร็จ');
                    return redirect()->route('nurse');
                }
            }
            
        } else {
            return view('home');
        }
    }
}
