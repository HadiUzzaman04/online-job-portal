<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManageCompanyController extends Controller
{
    public function viewCompany(Request $request){
        $search = $request['search'] ?? "";
        if($search!=""){
            $companies=User::where('name', 'LIKE', "%$search%")->get();
        }
        else{
            $companies=User::where('role','company')->get();
        }
        return view('admin.layout.companyTable',[
            'companies' => $companies
        ]);
    }

    public function deleteCompany($id){
        
        $companies=User::find($id);
        $companies->delete();
        return redirect()->back();
    }
}
