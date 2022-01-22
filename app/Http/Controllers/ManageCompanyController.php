<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManageCompanyController extends Controller
{
    public function viewCompany(){
        $companies=User::where('role','company')->get();
        return view('admin.layout.companyTable',[
            'companies' => $companies
        ]);
    }
}
