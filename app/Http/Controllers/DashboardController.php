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
        dd($request);
        //dd($request->hasFile('image'));

        $event = Event::create($request);

        return $event;
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy(Request $request)
    {
        $event = Event::findOrFail($request->id);
        $event->delete();
        return redirect('/dashboard');
    }
}
