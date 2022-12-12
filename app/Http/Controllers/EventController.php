<?php

namespace App\Http\Controllers;

use App\Models\AddEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=AddEvent::all();
        return view ('admin.layout.events',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.button.add_event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        AddEvent::create([
            'event_title'=>$request->input('event_title'),
            'event_description'=>$request->input('event_description')

        ]);
        return redirect('/admin/event');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EventEdit($id)
    {
        
        $events = AddEvent::find($id);
        return view('admin.button.edit_event',compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function EventUpdate(Request $request, $id){

        $events=AddEvent::find($id);
        $events->update([
            'event_title'=>$request->input('event_title'),
            'event_description'=>$request->input('event_description'),
        ]);
        $events->save();

        return redirect()->route('index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eventDelete($id)
    {
        // dd($id);
        $events = AddEvent::find($id);
        $events ->delete();

        return redirect()->back();
    }
}
