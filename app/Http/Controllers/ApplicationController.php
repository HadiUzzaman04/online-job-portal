<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function application()
    {
        $applications = Application::where('company_id', auth()->user()->id)->with('job')->get();
        return view('admin.layout.applications', compact('applications'));
    }
    public function viewCv($id)
    {
        $application = Application::findOrFail($id);
        return view('admin.layout.viewCv', compact('application'));
    }
    public function acceptreject($id)
    {
        $application = Application::find($id);
        return view('admin.layout.acceptreject', compact('application'));
    }
    public function update(Request $request, $id)
    {
        $application = Application::find($id);
        $application->update([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "status" => $request->status,
        ]);
        return redirect('/admin/applications');
    }
    public function acceptedlist()
    {
        $applications = Application::where(
            [
                ['company_id', auth()->user()->id],
                ['status', 'accept']
            ]
        )->get();
        // dd($application);
        return view('admin.button.acceptedlist', compact('applications'));
    }
}
