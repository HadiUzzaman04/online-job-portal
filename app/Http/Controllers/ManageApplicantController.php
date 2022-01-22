<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ManageApplicantController extends Controller
{
    public function viewApplicant(){
        $applicants=User::where('role','user')->get();
        return view('admin.layout.applicant',[
            'applicants' => $applicants
        ]);
        
    }
}
