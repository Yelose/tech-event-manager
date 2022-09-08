<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function home()
    {
        $events = Event::all();
       //$events = Event::paginate(10);

        return view('home', compact('events'));
    }
    public function show($event)
    {
        $event = Event::findOrFail($event);
        return view('event-detail', ['event' => $event]);
    }
}
