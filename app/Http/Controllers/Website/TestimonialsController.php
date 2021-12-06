<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function testimonials(){
        return view('website.layouts.testimonials');
    }
}
