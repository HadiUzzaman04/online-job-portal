<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AddJob;
use App\Models\AddCategory;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function job()
    {
        $categories=AddCategory::class::with('job')->get();
        $jobs=AddJob::all();
        return view ('admin.button.add_job',compact('jobs','categories'));
    }
    public function jobPost(Request $request){
        // dd($request);
        AddJob::create([
            'job_title'=>$request->input('job_title'),
            'vacancy'=>$request->input('vacancy'),
            'category'=>$request->input('category'),
            'years_of_experience'=>$request->input('years_of_experience'),
            'type'=>$request->input('type'),
            'description'=>$request->input('description'),

        ]);

        return redirect('/admin/jobs');

    }
}
