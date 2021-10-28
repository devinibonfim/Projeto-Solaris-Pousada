<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::middleware('admin')->group(function(){
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
});

Route::middleware('funcionario')->group(function(){
    Route::get('/funcionario', [HomeController::class,'funcionario'])->name('funcionario');
});

Route::middleware('hospede')->group(function(){
    Route::get('/hospede', [HomeController::class, 'hospede'])->name('hospede');
});