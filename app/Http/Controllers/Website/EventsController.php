<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\AddEvent;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function events(){
        $events=AddEvent::all();
        return view('website.layouts.events',compact('events'));
    }
}
