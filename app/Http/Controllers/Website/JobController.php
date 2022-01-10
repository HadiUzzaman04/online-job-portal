<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AddJob;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function job(){

        // dd("ok");
        $jobs=AddJob::all();
        
        return view('website.layouts.jobs',compact('jobs'));
    }
    public function viewjob($id){
        // dd($id);
        $job=AddJob::find($id);
        return view('website.layouts.view.view_details',compact('job'));
    }
    public function application(){
        return view('website.layouts.view.application');
    }
}
