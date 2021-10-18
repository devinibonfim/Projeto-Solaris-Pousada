<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StandardController;
use App\Http\Controllers\PremiumController;
use App\Http\Controllers\DeluxeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/standard', [App\Http\Controllers\StandardController::class, 'index'])->name('standard_index');
Route::get('/premium', [App\Http\Controllers\PremiumController::class, 'index'])->name('premium_index');
Route::get('/deluxe', [App\Http\Controllers\DeluxeController::class, 'index'])->name('deluxe_index');
Route::post('/valueCalc', [App\Http\Controllers\DeluxeController::class, 'valueCalc'])->name('deluxe_valueCalc');


Route::get('/ajuda', [App\Http\Controllers\AjudaController::class, 'index'])->name('ajuda');
Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');
Route::get('/reserva', [App\Http\Controllers\ReservaController::class, 'index'])->name('reserva');



