<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roomtypesub;

class RoomtypesubController extends Controller
{
    public function index()
{
    $showimage = Roomtypesub::all();
   
    return view('home', compact('showimage'));
}

}
