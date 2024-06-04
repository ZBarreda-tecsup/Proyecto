<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VuelosController;
use Pest\Plugins\Only;

Route::get('/',function () {
    return view('welcome');
});

Route::get('/dashboard', [VuelosController::class, 'showFlightDetails'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('vuelos',VuelosController::class)
    ->only(['index'])
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';

