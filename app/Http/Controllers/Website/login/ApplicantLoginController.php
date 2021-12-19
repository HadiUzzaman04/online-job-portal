<?php

namespace App\Http\Controllers\website\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ApplicantLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('website.pages.applicantlogin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.pages.Regestation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'password'=>bcrypt($request->input('password')),
            
        ]);
        //dd($request->all());
        return redirect('/');
        
    }


    public function dologin(Request $request){

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
