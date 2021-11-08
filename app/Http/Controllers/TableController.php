<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function companies (){
        return view ('admin.layout.companies');
    }

    public function applicant (){
        return view ('admin.layout.applicant');
    }

    public function catagories (){
        return view ('admin.layout.catagories');
    }

    public function events (){
        return view ('admin.layout.events');
    }
}
