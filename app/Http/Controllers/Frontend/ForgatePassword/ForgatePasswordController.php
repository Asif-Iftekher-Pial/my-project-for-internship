<?php

namespace App\Http\Controllers\Frontend\ForgatePassword;

use App\Models\User;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ForgatePasswordController extends Controller
{
    public function submitpage()
    {
        return view('new_frontend.forgetPassword.submitform');
    }
    public function submitpagelink(Request $request)
    {
        //check email is registared or not
        $user = User::where('email', $request->email)->first();
        //dd($user);
        if ($user) {
            //dd('found');

            Password::sendResetLink(
                $request->only('email')
            );

            return redirect()->back()->with('success', 'Reset link has sent to ' . $request->email);
        } else {

            return redirect()->back()->with('error', 'Email doesnt exist in Database');
        }
    }
    public function passwordReset($p_token,$p_email)
    {
          $token=$p_token;
          $email=$p_email;
       return view('new_frontend.forgetPassword.reset-password',compact('token','email'));
    }

    public function  resetPassword(Request $request)
    {
       
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
             'password' => 'required|min:6|confirmed',
        ]);
         Password::reset(
             $request->only('email', 'password', 'password_confirmation', 'token'),
             function ($user, $password) use ($request) {
                 $user->forceFill([
                     'password' => bcrypt($password)
                 ])->setRememberToken(Str::random(60));

                 $user->save();

            });
            return redirect()->route('user_Login')->with('success','password reset successful.');
    }



    //    public function resetPassword(Request $request)
    //    {
    //     $request->validate([
    //         'token' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required|min:6|confirmed',
    //     ]);
    //     Password::reset(
    //         $request->only('email', 'password', 'password_confirmation', 'token'),
    //         function ($user, $password) use ($request) {
    //             $user->forceFill([
    //                 'password' => bcrypt($password)
    //             ])->setRememberToken(Str::random(60));

    //             $user->save();

    //         });
    //     return redirect()->route('user_Login')->with('success','password reset successful.');
    //    }
}
