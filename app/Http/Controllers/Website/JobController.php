<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AddJob;
use App\Models\Application;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // public $id;
    public function job()
    {
        $today = date('Y-m-d');

        $jobs = AddJob::where('deadline', '>=', $today)->get();

        return view('website.layouts.jobs', compact('jobs'));
    }
    public function viewjob($id)
    {
        // dd($id);
        $job = AddJob::find($id);
        return view('website.layouts.view.view_details', compact('job'));
    }
    public function application($jobId)
    {
        return view('website.layouts.view.application', compact('jobId'));
    }
    public function storeApplication(Request $request)
    {
        $request->validate([

            'file' => 'required|mimes:pdf,xlx,csv|max:2048',

        ]);



        $fileName = time() . '.' . $request->file->extension();



        $request->file->move(public_path('uploads'), $fileName);

        Application::create([
            'job_id' => $request->input('jobId'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'cv' => $fileName
        ]);
        return redirect()->back();
    }
}
