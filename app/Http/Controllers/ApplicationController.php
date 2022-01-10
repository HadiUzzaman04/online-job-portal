<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function application(){
        return view('admin.layout.applications');
    }
}
