<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login()
    {
        return view('admin.adminlogin');
    }
    public function doLogin(Request $request){
        $userpost=[
        'email'=>$request->email,
        'password'=>$request->password,

        ];
        if (Auth::attempt($userpost)){
            return redirect()->route('admin.dashboard');
        }
        else
        return redirect()->route('admin.login');

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
