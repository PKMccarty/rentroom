<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Roomtypesub;

class RoomtypesubController extends Controller
{
    public function index()
{
    if (Auth::check()) {
    $showimage = Roomtypesub::all();
   
    return view('home', compact('showimage'));
} else {
    return view('home');
}
}

}
