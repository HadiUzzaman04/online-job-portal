<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function application()
    {
        $applications = Application::with('job')->get();
        return view('admin.layout.applications', compact('applications'));
    }
    public function viewCv($id)
    {
        $application = Application::findOrFail($id);
        return view('admin.layout.viewCv', compact('application'));
    }
}
