<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AddJob;
use App\Models\Application;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // public $id;
    public function job(Request $request)
    {
            $search = $request['search'] ?? "";
            if($search!=""){
                $jobs=AddJob::where('job_title', 'LIKE', "%$search%")->get();
            }
            else{
                $today = date('Y-m-d');

                $jobs = AddJob::where('deadline', '>=', $today)->get();
            }


        return view('website.layouts.jobs', compact('jobs'));
    }
    public function viewjob($id)
    {
        // dd($id);
        $job = AddJob::find($id);
        // $company_id = $job->users->id;
        return view('website.layouts.view.view_details', compact('job'));
    }
    public function application($jobId)
    {
        $job = AddJob::find($jobId);
        $company_id = $job->users->id;
        return view('website.layouts.view.application', compact('job', 'company_id'));
    }
    public function storeApplication(Request $request)
    {
        // dd($request->all());
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
            'cv' => $fileName,
            'company_id' => $request->input('company_id'),
            'status' => 'pending'
        ]);
        return redirect()->back();
    }
}
