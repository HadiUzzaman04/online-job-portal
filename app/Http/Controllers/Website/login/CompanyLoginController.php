<?php

namespace App\Http\Controllers\website\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyLoginController extends Controller{
    public function index()
    {
        
        return view('website.pages.companylogin');
    }
}


