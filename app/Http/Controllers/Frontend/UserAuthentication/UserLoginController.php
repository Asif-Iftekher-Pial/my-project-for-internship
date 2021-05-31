<?php

namespace App\Http\Controllers\Frontend\UserAuthentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function userloginpage()
    {
        
        return view('new_frontend.layouts.loginAndRegister');
    }

    public function registration(Request $request)
    {
        // dd($request->all());
        $request->validate([

            'name'=>'required',
            'email'=>'email|required|unique:users_login',
            'password'=>'required',
            'contact'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'role'=>'required'

        ]);

        User::create([
           
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'contact'=>$request->contact,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'role'=>$request->role
        ]);
        return redirect()->back()->with('success','Registration Successfull');
    }
    public function login(Request $request)
    {
        //  dd($request->all());
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]); 


        $credentials = $request->only('email', 'password');  //only email and passoword are now stored in credentials variable

        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('homepage');
        }

        return back()->withErrors([
            'email' => 'The provided information did not match our records.',
        ]);

    }


    public function logout()
        {
            
            Auth::logout();
            return redirect()->route('user_Login')->with('success','LogOut Successful');

        }

}
