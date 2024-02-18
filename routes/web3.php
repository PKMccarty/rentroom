<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoomrentController;
use App\Http\Controllers\JobrentController;
use App\Http\Controllers\RoomtypesubController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DropdownroomController;
use App\Http\Controllers\SpnurseController;

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

Route::get('choosebuild_process',[RoomrentController::class,'index'])->name('choosebuild_process');

Route::any('jobrequest', [JobrentController::class, 'index'])->name('jobrequest');

Route::get('showjob/{id}', [JobrentController::class, 'showjob'])->name('showjob');
Route::post('showlist', [JobrentController::class, 'listrent'])->name('showlist');

/* Route::get('/home', [RoomtypesubController::class, 'index'])->name('home'); */

Route::get('/', function () {
    return view('home');
});
Route::get('/boxcount', function () {
    return view('main.boxcount');
})->name('boxcount');
Route::get('boxcount',[HomeController::class,'boxcount'])->name('boxcount');

Route::get('admin', function(){
    return view('admin.index');
})->name('admin');

Route::get('about', function(){
    return view('main.about');
})->name('about');

// Register
Route::get('registerroom', function(){
    return view('main.registerroom');
})->name('registerroom');
Route::get('registerroom',[JobrentController::class,'authdata'])->name('registerroom');

Route::get('choosebuild', function(){
    return view('main.choosebuild');
})->name('choosebuild');

Route::get('test', function(){
    return view('test.index');
})->name('test');

Route::any('checkstatus', function(){
    return view('main.checkstatus');
})->name('checkstatus');
/* Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */


Auth::routes();

Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/home',[HomeController::class,'index'])->name('home');

//special nurse
Route::any('spnurse', function(){
    return view('spnurse.index');
})->name('spnurse');

Route::get('spnurse',[SpnurseController::class,'indexspnurse'])->name('spnurse');
Route::get('/discharge/{id}/{rommno}', [SpnurseController::class,'discharge'])->name('discharge');
//nurse
Route::any('nurse', function(){
    return view('nurse.index');
})->name('nurse');
Route::get('nurse',[SpnurseController::class,'indexnurse'])->name('nurse');
//doctor

Route::any('doctor', function(){
    return view('doctor.index');
})->name('doctor');
Route::get('doctor',[SpnurseController::class,'indexdoctor'])->name('doctor');
Route::get('doctoraccept/{id}/{count}',[SpnurseController::class,'doctorsave'])->name('doctoraccept');

//admin
Route::any('dashboard', function(){
    return view('admin.adminHome');
})->name('dashboard');

Route::any('jobprocess', function(){
    return view('admin.jobprocess');
})->name('jobprocess');

Route::get('admin/tableview', function(){
    return view('admin.tableview');
})->name('tableview');

Route::get('admin/tableview',[HomeController::class,'tableview'])->name('tableview');

Route::get('/admin/home',[HomeController::class,'adminHome'])->name('admin.adminhome')->middleware('is_admin');

Route::post('cancel',[HomeController::class,'cancel'])->name('cancel');
Route::get('jobprocess_{id}',[HomeController::class,'jobprocess'])->name('jobprocess');

// routes/web.php
Route::get('/dropdown', [HomeController::class,'jobprocess'])->name('dropdown');
Route::post('/processsave', [HomeController::class,'processsave'])->name('processsave');
Route::get('/get-subroomtype/{id}', [HomeController::class,'getsubroomtype'])->name('get-subroomtype');

Route::get('/countward', [SpnurseController::class,'countward'])->name('countward');

