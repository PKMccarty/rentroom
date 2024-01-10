<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use \App\Models\Jobrent;
use \App\Models\Roomtype;

class JobrentController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = $request->all();
        $data['room_type'] = 15;
        $data['status_id'] = 1;
        $jobcreate = Jobrent::create($data);
        if (!empty($jobcreate)) {
            session(['success' => true]);
            return view('main.checkstatus', compact('jobcreate'));
        } else {
           
        }
    }
    public function listrent(Request $request)
    {
        $job = Jobrent::join('roomtypesubs', 'jobrents.room_type', '=', 'roomtypesubs.id')
            ->join('statusrents', 'jobrents.status_id', '=', 'statusrents.id')
            ->join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->select('jobrents.id as rentid', 'jobrents.*', 'statusrents.*', 'roomtypes.*','roomtypesubs.*')
            ->where('jobrents.cid', $request->input('cid'))
            ->get();
        return view('main.checkstatus', compact('job'));
    }
    public function showjob(Request $request, $id)
    {   $result = base64_decode($id);
        $job = Jobrent::join('roomtypesubs', 'jobrents.room_type', '=', 'roomtypesubs.id')
            ->join('statusrents', 'jobrents.status_id', '=', 'statusrents.id')
            ->join('roomtypes', 'roomtypesubs.roomtype_id', '=', 'roomtypes.id')
            ->select('roomtypesubs.id as subid', 'jobrents.*', 'statusrents.*', 'roomtypes.*','roomtypesubs.*')
            ->where('jobrents.id', $result)
            ->first();
        $preroom = Roomtype::where('id',$job->preroom_id)->first();
        return view('main.showjob', compact('job','preroom'));
    }
    public function check(Request $request)
    {
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
    }
}
