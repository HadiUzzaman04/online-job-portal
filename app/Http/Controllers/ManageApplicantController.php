<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ManageApplicantController extends Controller
{
    public function viewApplicant(Request $request){
        $search = $request['search'] ?? "";
        if($search!=""){
            $applicants=User::where('name', 'LIKE', "%$search%")->get();
        }
        else{
            $applicants=User::where('role','user')->get();
        }
        return view('admin.layout.applicant',[
            'applicants' => $applicants
        ]);
        
    }
    public function delete($id){
        $applicants=User::find($id);
        $applicants->delete();
        return redirect()->back();
    }
}
