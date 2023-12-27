<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main.about');
});

Route::post('checklogin', [UserController::class, 'checklogin'])->name('checklogin');

Route::get('login', function(){
    return view('login.index');
})->name('login');

Route::get('about', function(){
    return view('main.about');
})->name('about');

Route::get('register', function(){
    return view('main.register');
})->name('register');

Route::get('checkstatus', function(){
    return view('main.checkstatus');
})->name('checkstatus');