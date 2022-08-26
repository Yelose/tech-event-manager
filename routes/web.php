<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Models\Event;

Route::get('/', [EventController::class, 'home'])->name('home');

Route::get('/detail/{event}', [EventController::class, 'detail']);

Route::get('/edit', function () {
    return view('event-edit');
});

Route::get('/new', function () {
    return view('event-new');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
