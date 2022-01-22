<?php

namespace App\Http\Controllers;

use App\Models\AddJob;
use Illuminate\Http\Request;

class TableController extends Controller
{
    // public function companies (){
    //     return view ('admin.table.companies');
    // }
    // public function addComp(){
    //     return view ('admin.button.add_company');
    // }








   
    public function catagories (){
        return view ('admin.layout.catagories');
    }


    public function jobs (){
        $jobs=AddJob::all();
        return view ('admin.layout.jobs',compact('jobs'));
    }
    
    public function testimonials (){
        return view ('admin.layout.testimonials');
    }
}
