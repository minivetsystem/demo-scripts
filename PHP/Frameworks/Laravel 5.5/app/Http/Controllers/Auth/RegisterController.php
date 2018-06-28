<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use Mail;

class RegisterController extends Controller
{

    public function register()
    {
        return view('auth.register');
    }

    public function create(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'fullname' => 'required',
            'phone' => 'required',
            'birthday' => 'required',
        ]);
        if ($validator->passes()) {
            $user = new User();
            $user->email = $r->email;
            $user->password = Hash::make($r->password);
            $user->fullname= $r->fullname;
            $user->phone= $r->phone;
            $user->birthday= $r->birthday;
            $user->link= $r->link;
            $user->socialmedia= $r->socialmedia;
            $user->status='0';
            $user->activation_token=str_random(18);
            $user->save();


            Mail::to($user->email)->send(new \App\Mail\Registration($user));

            return redirect()->route('home')->with('success_msg','User have successfully registered with us. We have send you a verification link. Please verify your email from your mail address.');
        }else{
            return redirect()->route('register')->withErrors($validator)->withInput();
        }
    }
}
