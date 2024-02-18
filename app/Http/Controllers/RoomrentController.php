<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\Models\Roomtype;
use \App\Models\Roomtypesub;
use \App\Models\Jobrent;
use Illuminate\Support\Facades\Session;
class RoomrentController extends Controller
{
    //// ใน Controller
    public function index(Request $request) {
        if (Auth::check()) {
       $roomtype = base64_decode($request->input('room_type'));
       $roomselect = Roomtype::where('id', $roomtype)->first();
           $roomsubtype = Roomtypesub::where('roomtype_id', $roomselect->id)->get();
           return view('main.registerroom', compact('roomselect','roomsubtype'));
        } else {
            return view('home');
        }
    }
    public function registeruser(Request $request) {
        $roomtype = base64_decode($request->input('room_type'));
        $roomselect = Roomtype::where('id', $roomtype)->first();
            $roomsubtype = Roomtypesub::where('roomtype_id', $roomselect->id)->get();
            return view('main.registeruser', compact('roomselect','roomsubtype'));
     }
     public function registerusersave(Request $request) {
        $data = [
            'job_date_time' => $request->input('job_date_time'),
            'patient_name' => $request->input('patient_name'),
            'cid' => $request->input('cid'),
            'job_pa_status' => $request->input('job_rent_relation'),
            'job_rent_relation' => $request->input('job_rent_relation'),
            'job_rent_tell' => $request->input('job_rent_tell'),
            'job_re_date_time' => $request->input('job_re_date_time'),
            'job_rent_name' => $request->input('job_rent_name'),
            'room_id' => 109,
            'doctor_id' => 0,
            'ward_id' => 1,
            'status_id' => 1,
            'accept_id' => 3,
            'is_register' => '0',
        ];
        $cid = $request->input('cid');
        $patient_name = $request->input('patient_name');
        $job_rent_tell = $request->input('job_rent_tell');
        if (is_string($cid) && ctype_alpha($cid)) {
            Session::flash('error', 'กรุณากรอกเลขบัตรประชาชนให้ถูกต้อง');
            return redirect()->back()->withInput();
        } else {
            if (is_numeric($cid) && strlen($cid) === 13) {
                if (is_string($patient_name)) {
                    if (is_numeric($job_rent_tell) && strlen($job_rent_tell) === 10) {
                        $jobcreate = Jobrent::create($data);
                        if (!empty($jobcreate)) {
                            Session::flash('logsuccess', 'เพิ่มข้อมูลเรียบร้่อย');
                            return view('home');
                        } else {
                            Session::flash('error', 'ข้อมูลไม่ถูกต้อง');
                            return redirect()->back()->withInput();
                        }
                    } else {
                        Session::flash('error', 'กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง');
                        return redirect()->back()->withInput();
                    }
                } else {
                    Session::flash('error', 'กรุณากรอกชื่อ ผู้ป่วยให้ถูกต้อง');
                    return redirect()->back()->withInput();
                }
            } else {
                Session::flash('error', 'กรุณากรอกเลขบัตรประชาชนให้ถูกต้อง');
                return redirect()->back()->withInput();
            }
        }
     }

}
