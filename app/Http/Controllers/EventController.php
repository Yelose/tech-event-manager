<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function home()
    {
        //$events = Event::all();
        $events = Event::paginate(5);

        return view('home', compact('events'));
    }
    public function show($event)
    {
        $event = Event::findOrFail($event);
        return view('event-detail', ['event' => $event]);
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
        dd($request);
        //dd($request->hasFile('image'));
       
        $event = Event::create($request);

        return $event;
    }

    public function index()
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
