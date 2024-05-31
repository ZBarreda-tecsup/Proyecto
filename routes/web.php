<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mensajeController;

Route::get('/',function () {
    return view('welcome');
});

Route::get('/mensaje', [mensajeController::class, 'mostrarMensaje']);