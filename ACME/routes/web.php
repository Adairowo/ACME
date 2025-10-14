<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ZonasController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\PlanosController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('clientes', ClientesController::class);
Route::resource('zonas', ZonasController::class);
Route::resource('proyectos', ProyectosController::class);
Route::resource('planos', PlanosController::class);