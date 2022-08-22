<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/detail', function () {
    return view('event-detail');
});
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
