<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Models\Event;

Route::get('/', [EventController::class, 'home'])->name('home');
Route::get('/show/{event}', [EventController::class, 'show']);
Route::get('/edit', [EventController::class, 'edit']);
Route::get('/new', [EventController::class, 'new']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
