<?php

namespace App\Http\Controllers\Backend\Login_panel;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Eforms;
use App\Models\Order;
use App\Models\Product;
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
            
            if (auth()->user()->role == 'admin') 
            { 
                return redirect()->route('home');
            } 
            elseif (auth()->user()->role == 'employee') {
                $status = Eforms::where('user_id', auth()->user()->id);
                $status->update([
                    'status'=> 'Active'
                ]);
                return redirect()->route('home');
            }
        }

        return back()->withErrors([
            'email' => 'The provided information did not match our records.',
        ]);

    }

    public function logout()
        {
            if(auth()->user()->role == 'employee')
            {
                $status = Eforms::where('user_id', auth()->user()->id);
                $status->update([
                    'status'=> 'Inactive'
                ]);
            }
            Auth::logout();
            return redirect()->route('adminlogin')->with('success','Logout Successful');

        }
}
