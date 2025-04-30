<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\ReservaController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('salas', SalaController::class);
Route::resource('reservas', ReservaController::class);
Route::get('/', [ReservaController::class, 'index']);