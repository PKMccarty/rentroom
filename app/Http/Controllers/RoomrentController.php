<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Roomtype;
use \App\Models\Roomtypesub;

class RoomrentController extends Controller
{
    //// ใน Controller
public function index(Request $request) {
   $roomtype = base64_decode($request->input('room_type'));
   $roomselect = Roomtype::where('id', $roomtype)->first();
       $roomsubtype = Roomtypesub::where('roomtype_id', $roomselect->id)->get();
       return view('main.register', compact('roomselect','roomsubtype'));
}

}
