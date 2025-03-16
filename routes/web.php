<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ParqueaderoController;
use Illuminate\Support\Facades\Auth;

// Rutas de autenticación
Auth::routes();

// Rutas protegidas con middleware de autenticación
Route::middleware(['auth'])->group(function () {
    Route::resource('vehiculos', VehiculoController::class);
    Route::resource('parqueaderos', ParqueaderoController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
