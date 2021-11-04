<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home',     [App\Http\Controllers\HomeController::class,     'index'])->name('home');
Route::get('/standard', [App\Http\Controllers\StandardController::class, 'index'])->name('standard_index');
Route::get('/premium',  [App\Http\Controllers\PremiumController::class,  'index'])->name('premium_index');
Route::get('/deluxe',   [App\Http\Controllers\DeluxeController::class,   'index'])->name('deluxe_index');


//funcionario Crud
Route::get('/FuncView',        [App\Http\Controllers\ViewController::class,    'viewFuncionario']   )->name('FuncView'); //
Route::get('/FuncEdit/{id}',   [App\Http\Controllers\EditController::class,    'editFuncionario']   )->name('FuncEdit'); //
Route::get('/FuncShow/{id}',   [App\Http\Controllers\ShowController::class,    'showFuncionario']   )->name('FuncShow'); //
Route::get('/FuncDestroy/{id}',[App\Http\Controllers\DestroyController::class, 'destroyFuncionario'])->name('FuncDestroy'); //
Route::get('/FuncAdd',         [App\Http\Controllers\AddController::class,     'createFuncionario'] )->name('FuncAdd');
Route::post('/FuncStore',      [App\Http\Controllers\StoreController::class,   'storeFuncionario']  )->name('FuncStore');
Route::post('/FuncUpdate/{id}',[App\Http\Controllers\UpdateController::class,  'updateFuncionario'] )->name('FuncUpdate'); //

Route::middleware('admin')->group(function(){
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
});

Route::middleware('funcionario')->group(function(){
    Route::get('/funcionario', [HomeController::class,'funcionario'])->name('funcionario');
});

Route::middleware('hospede')->group(function(){
    Route::get('/hospede', [HomeController::class, 'hospede'])->name('hospede');
});