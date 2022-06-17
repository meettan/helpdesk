<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
class LoginController extends Controller
{
    //

    public function ShowLogin()
    {
        return view('login');
        //echo Hash::make('123');
    }
    public function Login(Request $request)
    {
        // return $request;
        $student = User::where('user_id', '=', $request->user_id)->get();
        // $student = User::where('email', '=', $request->email)->where('active', 'Y')->get();
        // return $student;
        if (count($student) > 0) {
            // if ($student[0]->email_verified == 'Y') {
                //attempt to login the admins in
                if (Auth::guard('web')->attempt(['user_id' => $request->user_id, 'password' => $request->password])) {
                    // session()->forget('login_register_page');
                    // return redirect(session('url.intended'));
                    session(['user_detail' => $student]);
                    return redirect()->route('dashboard');
                }
                //if unsuccessfull redirect back to the login form with form data
                
                return redirect()->back()->with('login_error','error')->withInput($request->only('email', 'remember'));
            // } else {
            //     session(['login_register_page' => 'Y']);
            //     return redirect()->back()->with('email_verify_error', 'error');
            // }
        } else {
            // session(['login_register_page' => 'Y']);
            return redirect()->back()->with('account_active_error', 'error');
        }

    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
