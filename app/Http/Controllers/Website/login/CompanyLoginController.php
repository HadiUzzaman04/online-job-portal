<?php

namespace App\Http\Controllers\website\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CompanyLoginController extends Controller{
    public function index()
    {
        
        return view('website.pages.companylogin');
    }

    public function companydologin(Request $request){

        // dd($request);
        $userPost = $request->except('_token');
                // dd($userPost);
                // dd(Auth::attempt($userPost));
        if(Auth::attempt($userPost)){
            return redirect('/');
        } else{
            return redirect('/');
        }

    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}


