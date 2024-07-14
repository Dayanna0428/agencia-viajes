<?php

use App\Http\Controllers\ViajeController;
use App\Http\Controllers\ViajeroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//http://localhost/AgenciaViajes/public/viajeros
Route::resource('viajeros', ViajeroController::class);
Route::resource('viajes', ViajeController::class);