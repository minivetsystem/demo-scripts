<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;
class LoginController extends Controller
{


public function index(){
    return view('auth/login');
}

    public function login()
    {
        if(Auth::guard('user')->check()){
            return redirect()->route("home");
        }
        return view('auth.login');
    }



    public function dologin(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $validator->after(function ($validator) use ($request) {

            if($request->input('email')!="" && $request->input('password')!=""){
                $m = User::where('email', $request->input('email'))->where('status','1')->get()->first();
                if(empty($m)){
                    $validator->errors()->add('email', 'Invalid Username or password');
                }else{
                    if (Hash::check($request->input('password'), $m->password)==false) {
                        $validator->errors()->add('email', 'Invalid Username or password');
                    }
                }
            }

        });

        if ($validator->passes()) {
            $m = User::where('email', $request->input('email'))->where('status','1')->get()->first();
            Auth::guard('user')->login($m);
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->withErrors($validator)->withInput();;
        }

    }

    public function getLogout(){
        Auth::guard('user')->logout();
        return redirect()->route('login');
    }
}
