<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use \App\Models\Jobrent;
use \App\Models\Roomtype;
use \App\Models\guidelinesadmits;
use \App\Models\User;
use \App\Models\Statuspatients;
use Illuminate\Support\Facades\Auth;

class JobrentController extends Controller
{
    //
    public function index(Request $request)
    {

        if (Auth::check()) {
            if (
                $request->input("row1_option") == '1' &&
                $request->input('row2_option') == '1' &&
                $request->input('row3_option') == '1' &&
                $request->input('row4_option') == '1' &&
                $request->input('row5_option') == '1' &&
                $request->input('row6_option') == '1' &&
                $request->input('row7_option') == '1' &&
                $request->input('row8_option') == '1' &&
                $request->input('row9_option') == '1' &&
                $request->input('row10_option') == '1' &&
                $request->input('row11_option') == '1' &&
                $request->input('row12_option') == '1' &&
                $request->input('row13_option') == '1' &&
                $request->input('row14_option') == '1' &&
                $request->input('row15_option') == '1' &&
                $request->input('row16_option') == '1' &&
                $request->input('row17_option') == '1' &&
                $request->input('row18_option') == '1' &&
                $request->input('row19_option') == '1' &&
                $request->input('row20_option') == '1' &&
                $request->input('row21_option') == '1' &&
                $request->input('row22_option') == '1' &&
                $request->input('row23_option') == '1' &&
                $request->input('row24_option') == '1' &&
                $request->input('row25_option') == '1' &&
                $request->input('row26_option') == '1' &&
                $request->input('row27_option') == '1' &&
                $request->input('row28_option') == '1'
            ) {
                $data = [
                    'job_date_time' => $request->input('job_date_time'),
                    'patient_name' => $request->input('patient_name'),
                    'cid' => $request->input('cid'),
                    'job_pa_status' => $request->input('job_pa_status'),
                    'doctor_id' => $request->input('doctorid'),
                    'ward_id' => $request->input('ward_id'),
                    'job_re_tel' => $request->input('job_re_tel'),
                    'job_re_date_time' => $request->input('job_re_date_time'),
                    'job_rent_name' => '',
                    'job_rent_tell' => '',
                    'job_rent_relation' => '',
                    'room_id' => 109,
                    'status_id' => 1,
                    'accept_id' => 1,
                    'socket_id' => 0,
                    'is_register'=> '1',
                ];

                $cid = $request->input('cid');
                $patient_name = $request->input('patient_name');
                $job_re_tel = $request->input('job_re_tel');
                if (is_string($cid) && ctype_alpha($cid)) {
                    Session::flash('error', 'กรุณากรอกเลขบัตรประชาชนให้ถูกต้อง');
                    return redirect()->back()->withInput();
                } else {
                    if (is_numeric($cid) && strlen($cid) === 13) {
                        if (is_string($patient_name)) {
                            if (is_numeric($job_re_tel) && strlen($job_re_tel) === 5) {
                                $jobcreate = Jobrent::create($data);
                                if (!empty($jobcreate)) {
                                    $data2 = [
                                        'bypass' => '1',
                                        'guide_no1' => $request->input('row1_option'),
                                        'guide_no2' => $request->input('row2_option'),
                                        'guide_no3' => $request->input('row3_option'),
                                        'guide_no4' => $request->input('row4_option'),
                                        'guide_no5' => $request->input('row5_option'),
                                        'guide_no6' => $request->input('row6_option'),
                                        'guide_no7' => $request->input('row7_option'),
                                        'guide_no8' => $request->input('row8_option'),
                                        'guide_no9' => $request->input('row9_option'),
                                        'guide_no10' => $request->input('row10_option'),
                                        'guide_no11' => $request->input('row11_option'),
                                        'guide_no12' => $request->input('row12_option'),
                                        'guide_no13' => $request->input('row13_option'),
                                        'guide_no14' => $request->input('row14_option'),
                                        'guide_no15' => $request->input('row15_option'),
                                        'guide_no16' => $request->input('row16_option'),
                                        'guide_no17' => $request->input('row17_option'),
                                        'guide_no18' => $request->input('row18_option'),
                                        'guide_no19' => $request->input('row19_option'),
                                        'guide_no20' => $request->input('row20_option'),
                                        'guide_no21' => $request->input('row21_option'),
                                        'guide_no22' => $request->input('row22_option'),
                                        'guide_no23' => $request->input('row23_option'),
                                        'guide_no24' => $request->input('row24_option'),
                                        'guide_no25' => $request->input('row25_option'),
                                        'guide_no26' => $request->input('row26_option'),
                                        'guide_no27' => $request->input('row27_option'),
                                        'guide_no28' => $request->input('row28_option'),
                                        'job_id' => $jobcreate->id,
                                    ];
                                    $gui = guidelinesadmits::create($data2);
                                    if (!empty($gui)) {
                                        Session::flash('logsuccess', 'เพิ่มข้อมูลเรียบร้่อย');
                                        return redirect()->route('nurse');
                                    }
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
            } else {
                $data = [
                    'job_date_time' => $request->input('job_date_time'),
                    'patient_name' => $request->input('patient_name'),
                    'cid' => $request->input('cid'),
                    'job_pa_status' => $request->input('job_pa_status'),
                    'doctor_id' => $request->input('doctorid'),
                    'ward_id' => $request->input('ward_id'),
                    'job_re_tel' => $request->input('job_re_tel'),
                    'job_re_date_time' => $request->input('job_re_date_time'),
                    'job_rent_name' => '',
                    'job_rent_tell' => '',
                    'job_rent_relation' => '',
                    'room_id' => 109,
                    'status_id' => 1,
                    'accept_id' => 0,
                    'socket_id' => 0,
                    'is_register'=> '1',
                ];
                $cid = $request->input('cid');
                $patient_name = $request->input('patient_name');
                $job_re_tel = $request->input('job_re_tel');
                if (is_string($cid) && ctype_alpha($cid)) {
                    Session::flash('error', 'กรุณากรอกเลขบัตรประชาชนให้ถูกต้อง');
                    return redirect()->back()->withInput();
                } else {
                    if (is_numeric($cid) && strlen($cid) === 13) {
                        if (is_string($patient_name)) {
                            if (is_numeric($job_re_tel) && strlen($job_re_tel) === 5) {
                                $jobcreate = Jobrent::create($data);
                                if (!empty($jobcreate)) {
                                    $data2 = [
                                        'bypass' => '0',
                                        'guide_no1' => $request->input('row1_option'),
                                        'guide_no2' => $request->input('row2_option'),
                                        'guide_no3' => $request->input('row3_option'),
                                        'guide_no4' => $request->input('row4_option'),
                                        'guide_no5' => $request->input('row5_option'),
                                        'guide_no6' => $request->input('row6_option'),
                                        'guide_no7' => $request->input('row7_option'),
                                        'guide_no8' => $request->input('row8_option'),
                                        'guide_no9' => $request->input('row9_option'),
                                        'guide_no10' => $request->input('row10_option'),
                                        'guide_no11' => $request->input('row11_option'),
                                        'guide_no12' => $request->input('row12_option'),
                                        'guide_no13' => $request->input('row13_option'),
                                        'guide_no14' => $request->input('row14_option'),
                                        'guide_no15' => $request->input('row15_option'),
                                        'guide_no16' => $request->input('row16_option'),
                                        'guide_no17' => $request->input('row17_option'),
                                        'guide_no18' => $request->input('row18_option'),
                                        'guide_no19' => $request->input('row19_option'),
                                        'guide_no20' => $request->input('row20_option'),
                                        'guide_no21' => $request->input('row21_option'),
                                        'guide_no22' => $request->input('row22_option'),
                                        'guide_no23' => $request->input('row23_option'),
                                        'guide_no24' => $request->input('row24_option'),
                                        'guide_no25' => $request->input('row25_option'),
                                        'guide_no26' => $request->input('row26_option'),
                                        'guide_no27' => $request->input('row27_option'),
                                        'guide_no28' => $request->input('row28_option'),
                                        'job_id' => $jobcreate->id,
                                    ];
                                    $gui = guidelinesadmits::create($data2);
                                    if (!empty($gui)) {
                                        Session::flash('logsuccess', 'เพิ่มข้อมูลเรียบร้่อย');
                                        return redirect()->route('nurse');
                                    }
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
        } else {
            return view('home');
        }
    }
    public function listrent(Request $request)
    {
        $job = Jobrent::join('roomtypesubs', 'jobrents.room_id', '=', 'roomtypesubs.id')
            ->join('statusrents', 'jobrents.status_id', '=', 'statusrents.id')
            ->join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->join('statuspatients', 'jobrents.job_pa_status', '=', 'statuspatients.id')
            ->select('jobrents.id as rentid', 'statuspatients.*', 'jobrents.*', 'statusrents.*', 'roomtypes.*', 'roomtypesubs.*')
            ->where('jobrents.cid', $request->input('cid'))
            ->get();

        return view('main.checkstatus', compact('job'));
    }
    public function showjob(Request $request, $id)
    {
        $result = base64_decode($id);
        $job = Jobrent::join('roomtypesubs', 'jobrents.room_id', '=', 'roomtypesubs.id')
            ->join('statusrents', 'jobrents.status_id', '=', 'statusrents.id')
            ->join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->select('roomtypesubs.id as subid', 'jobrents.*', 'statusrents.*', 'roomtypes.*', 'roomtypesubs.*')
            ->where('jobrents.id', $result)
            ->first();
        $preroom = Roomtype::where('id', $job->preroom_id)->first();
        return view('main.showjob', compact('job', 'preroom'));
    }
    public function check(Request $request)
    {
        if (Auth::check()) {
            $cid = $request->input('cid');

            if (is_string($cid) && ctype_alpha($cid)) {
                Session::flash('error', 'กรุณากรอกเลขบัตรประชาชนให้ถูกต้อง หรือ HN ให้ถูกต้อง');
                return redirect()->back()->withInput();
            } else {
                if (is_numeric($cid) && strlen($cid) === 13) {
                    $job = Jobrent::join('roomtypesubs', 'jobrents.room_type', '=', 'roomtypesubs.id')
                        ->join('statusrents', 'jobrents.status_id', '=', 'statusrents.id')
                        ->join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
                        ->where('jobrents.cid', $cid)
                        ->first();
                } else {
                    Session::flash('error', 'กรุณากรอกเลขบัตรประชาชนให้ถูกต้อง หรือ HN ให้ถูกต้อง');
                    return redirect()->back()->withInput();
                }
            }
            return view('main.showjob', compact('job'));
        } else {
            return view('home');
        }
    }
    public function authdata()
    {
        if (Auth::check()) {
            $listdoctor = User::where('is_admin', 3)->get();
            $statuspatient = Statuspatients::all();
            return view('main.registerroom', compact('listdoctor', 'statuspatient'));
        } else {
            return view('home');
        }
    }
}
