<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AddJob;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function job(){

        $jobs=AddJob::all();
        
        return view('website.layouts.jobs',compact('jobs'));
    }
}
