<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
// UserController.php
public function checklogin(Request $request)
{
    $validator = Validator::make($request->all(), [
        'username' => 'required|string|max:255',
        'password' => 'required|string',
    ], [
        'username.required' => 'กรุณากรอกชื่อผู้ใช้งาน',
        'password.required' => 'กรุณากรอกรหัสผ่าน',
        'username.max' => 'ชื่อผู้ใช้งานต้องมีความยาวไม่เกิน :max ตัวอักษร',
    ]);
    
    if ($validator->fails()) {
        return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
    }
    $username = $request->input('username');
    $password = md5($request->input('password'));
    $users = DB::connection('second_database')
        ->select("SELECT * FROM opduser WHERE loginname = ? AND passweb = ?", [$username, $password]);
    $loginnameFromSecondDB = !empty($users) ? $users[0]->loginname : null;
    $result = DB::connection('mysql')
        ->select("SELECT * FROM users WHERE username = ?", [$loginnameFromSecondDB]);
    if (!empty($result) && !empty($users)) {
        session(['loginname' => $result[0]->username, 'name' => $users[0]->name, 'logged_in' => true]);
        return redirect()->route('admin');
    }
    return redirect()->back()->withErrors(['error' => 'ไม่สามารถใช้งานได้ ชื่อผู้ใช้งาน หรือ รหัสผ่านผิด'])->withInput();
}
public function logout()
{
      // ลบ session ทั้งหมด
      Session::flush();

      // Redirect ไปยังหน้า home
      return redirect('/');
}


}

