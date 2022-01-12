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
        $categories=AddCategory::all();
     
        return view ('admin.button.add_job',compact('categories'));
    }
    public function jobPost(Request $request){
        // dd($request);
        AddJob::create([
            'job_title'=>$request->input('job_title'),
            'vacancy'=>$request->input('vacancy'),
            'category'=>$request->input('category'),
            'years_of_experience'=>$request->input('years_of_experience'),
            'type'=>$request->input('type'),
            'deadline'=>$request->input('deadline'),
            'description'=>$request->input('description'),

        ]);

        return redirect('/admin/jobs');

    }

    public function jobDelete($id){
        // dd($id);
        $jobs = AddJob::find($id);
        $jobs->delete();

        return redirect()->back();
    }

    public function jobEdit($id){
        // dd($id);
        $jobs = AddJob::find($id);
        return view('admin.button.edit_job',compact('jobs'));

    }

    public function jobUpdate(Request $request, $id){

        $jobs=AddJob::find($id);
        $jobs->update([
            'job_title'=>$request->input('job_title'),
            'vacancy'=>$request->input('vacancy'),
            'category'=>$request->input('category'),
            'years_of_experience'=>$request->input('years_of_experience'),
            'type'=>$request->input('type'),
            'description'=>$request->input('description'),
            'deadline'=>$request->input('deadline'),
        ]);
        $jobs->save();

        return redirect()->route('jobs');
    }
}
