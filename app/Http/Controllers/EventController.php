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
    public function new()
    {
        return view('event-new');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
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
