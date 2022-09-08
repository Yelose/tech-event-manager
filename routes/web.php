<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'home'])->name('home');
Route::get('/show/{event}', [EventController::class, 'show']);
Route::get('/edit/{event}', [DashboardController::class, 'edit'])->name('edit');
Route::put('/update/{event}', [DashboardController::class, 'update' ])->name('update');
Route::get('/create', [DashboardController::class, 'create'])->name('create');
Route::post('/', [DashboardController::class, 'store'])->name('store');
Route::delete('/destroy', [DashboardController::class, 'destroy'])->name('destroy');

Route::get('/dashboard', [DashboardController::class, "dashboard"])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
