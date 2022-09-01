<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Models\Event;

Route::get('/', [EventController::class, 'home'])->name('home');
Route::get('/show/{event}', ['events' => Event::orderBy('created_at', 'desc')->get()]);
// Route::get('/show/{event}', [EventController::class, 'show']);
Route::get('/edit', [EventController::class, 'edit']);
Route::get('/create', [EventController::class, 'create'])->name('create');
Route::post('/', [EventController::class, 'store'])->name('store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
