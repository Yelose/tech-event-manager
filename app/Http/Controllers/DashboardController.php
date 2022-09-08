<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $events = Event::all();

        return view('dashboard', compact('events'));
    }

    public function edit($event)
    {
        $event = Event::findOrFail($event);
        return view('event-edit', ['event' => $event]);

    }

    public function create()
    {
        return view('event-new');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,svg|max:10240', 'title' => 'required', 'date' => 'required', 'hour' => 'required', 'duration' => 'required', 'max-participants' => 'required', 'min-participants' => 'required', 'price' => 'required',  'description' => 'required', 'included' => 'required'
        ]);

         $event = $request->all();

         if($image = $request->file('image')) {
             $imageSavePath = 'img/images/';
             $imageEvent = date('YmdHis'). "." . $image->getClientOriginalExtension();
             $image->move($imageSavePath, $imageEvent);
             $event['image'] = "$imageEvent";             
         }
         
         Event::create($event);
         return redirect()->route('home');
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,svg|max:10240', 
            'title' => 'required', 
            'date' => 'required', 
            'hour' => 'required', 
            'duration' => 'required', 
            'max-participants' => 'required', 
            'min-participants' => 'required', 
            'price' => 'required',  
            'description' => 'required', 
            'included' => 'required'
        ]);

         $e = $request->all();

         if($image = $request->file('image')) {
             $imageSavePath = 'img/images/';
             $imageEvent = date('YmdHis'). "." . $image->getClientOriginalExtension();
             $image->move($imageSavePath, $imageEvent);
             $event['image'] = "$imageEvent";             
         }else{
            unset($event['image']);
         }
         $event->update($e);
         return redirect()->route('home');
    }
    public function destroy(Request $request)
    {
        $event = Event::findOrFail($request->id);
        $event->delete();
        return redirect('/dashboard');
    }
}
