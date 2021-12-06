<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function contactus(){
        return view ('website.layouts.contactus');
    }
}
