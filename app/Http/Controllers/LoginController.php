<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function ShowLogin()
    {
        return view('login');
    }
    public function Login(Request $request)
    {
        // return $request;
        $student = User::where('email', '=', $request->email)->get();
        // $student = User::where('email', '=', $request->email)->where('active', 'Y')->get();
        // return $student;
        if (count($student) > 0) {
            // if ($student[0]->email_verified == 'Y') {
                //attempt to login the admins in
                if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                    // session()->forget('login_register_page');
                    // return redirect(session('url.intended'));
                    return redirect()->route('home');
                }
                //if unsuccessfull redirect back to the login form with form data
                session(['login_register_page' => 'Y']);
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
}
