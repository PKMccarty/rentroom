<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '\home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request){
        $input = $request->all();
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required']);
        if(auth()->attempt(array('username'=>$input['username'],'password'=>$input['password']))){
            if(auth()->user()->is_admin ==1){
                session(['logged_in' => true,'success'=>true]);
            return redirect()->route('tableview');
        }
        else if(auth()->user()->is_admin ==2){
            Session::flash('success', 'เข้าสู่ระบบสำเร็จ');
        return redirect()->route('spnurse');
        }
        else if(auth()->user()->is_admin ==3){
            Session::flash('success', 'เข้าสู่ระบบสำเร็จ');
        return redirect()->route('doctor');
    }
    else if(auth()->user()->is_admin ==4){
        Session::flash('success', 'เข้าสู่ระบบสำเร็จ');
    return redirect()->route('nurse');
    }
        else{
            return redirect()->route('home');
        }
    }else{
        return redirect()->route('login')->with('error','Invalid Username and Password');
    }
}
public function logout(Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();
    Session::flash('success', 'ออกจากระบบสำเร็จ');
    return redirect('/home');
}
}

