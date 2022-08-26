<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function home()
    {
        $events = Event::all();

        return view('home', ['events' => $events]);
    }

    public function detail($event)
    {
        $event = Event::findOrFail($event);
        return view('event-detail', ['event' => $event]);
    }
}
