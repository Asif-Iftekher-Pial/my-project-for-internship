<?php

namespace App\Http\Controllers\Backend\Login_panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function homecontroller()
    {
        return view('master');
    }
    //
    public function adminlogin()
    {
        return view('backend.login.login');
    }
    public function dologin(Request $request)
    {
        // dd($request->all());
        
        //  dd($request->all());
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]); 


        $credentials = $request->only('email', 'password');  //only email and passoword are now stored in credentials variable

        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'The provided information did not match our records.',
        ]);

    }

    public function logout()
        {
            
            Auth::logout();
            return redirect()->route('adminlogin')->with('success','Logout Successful');

        }
}
