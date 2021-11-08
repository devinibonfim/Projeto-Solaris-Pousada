<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/ajuda',   [App\Http\Controllers\ViewController::class, 'viewAjuda'])->name('ajuda');
Route::get('/perfil',  [App\Http\Controllers\ViewController::class, 'viewPerfil'])->name('perfil');
Route::get('/reserva', [App\Http\Controllers\ViewController::class, 'viewReserva2'])->name('reserva2');


//funcionario Crud
Route::get('/FuncView',        [App\Http\Controllers\ViewController::class,    'viewFuncionario']   )->name('FuncView'); //
Route::get('/FuncEdit/{id}',   [App\Http\Controllers\EditController::class,    'editFuncionario']   )->name('FuncEdit'); //
Route::get('/FuncShow/{id}',   [App\Http\Controllers\ShowController::class,    'showFuncionario']   )->name('FuncShow'); //
Route::get('/FuncDestroy/{id}',[App\Http\Controllers\DestroyController::class, 'destroyFuncionario'])->name('FuncDestroy'); //
Route::get('/FuncAdd',         [App\Http\Controllers\AddController::class,     'createFuncionario'] )->name('FuncAdd'); //
Route::post('/FuncStore',      [App\Http\Controllers\StoreController::class,   'storeFuncionario']  )->name('FuncStore'); //
Route::post('/FuncUpdate/{id}',[App\Http\Controllers\UpdateController::class,  'updateFuncionario'] )->name('FuncUpdate'); //

//hospede Crud
Route::get('/HospView',        [App\Http\Controllers\ViewController::class,    'viewHospede']   )->name('HospView'); //
Route::get('/HospEdit/{id}',   [App\Http\Controllers\EditController::class,    'editHospede']   )->name('HospEdit'); //
Route::get('/HospShow/{id}',   [App\Http\Controllers\ShowController::class,    'showHospede']   )->name('HospShow'); //
Route::get('/HospDestroy/{id}',[App\Http\Controllers\DestroyController::class, 'destroyHospede'])->name('HospDestroy'); //
Route::get('/HospAdd',         [App\Http\Controllers\AddController::class,     'createHospede'] )->name('HospAdd'); //
Route::post('/HospStore',      [App\Http\Controllers\StoreController::class,   'storeHospede']  )->name('HospStore'); //
Route::post('/HospUpdate/{id}',[App\Http\Controllers\UpdateController::class,  'updateHospede'] )->name('HospUpdate'); //

//produto Crud
Route::get('/ProdView',        [App\Http\Controllers\ViewController::class,    'viewProduto']   )->name('ProdView'); //
Route::get('/ProdEdit/{id}',   [App\Http\Controllers\EditController::class,    'editProduto']   )->name('ProdEdit'); //
Route::get('/ProdShow/{id}',   [App\Http\Controllers\ShowController::class,    'showProduto']   )->name('ProdShow'); //
Route::get('/ProdDestroy/{id}',[App\Http\Controllers\DestroyController::class, 'destroyProduto'])->name('ProdDestroy'); //
Route::get('/ProdAdd',         [App\Http\Controllers\AddController::class,     'createProduto'] )->name('ProdAdd'); //
Route::post('/ProdStore',      [App\Http\Controllers\StoreController::class,   'storeProduto']  )->name('ProdStore'); //
Route::post('/ProdUpdate/{id}',[App\Http\Controllers\UpdateController::class,  'updateProduto'] )->name('HospUpdate'); //

//reserva Crud
Route::get('/ReserView',        [App\Http\Controllers\ViewController::class,    'viewReserva']   )->name('ReserView'); //
Route::get('/ReserEdit/{id}',   [App\Http\Controllers\EditController::class,    'editReserva']   )->name('ReserEdit'); 
Route::get('/ReserShow/{id}',   [App\Http\Controllers\ShowController::class,    'showReserva']   )->name('ReserShow');
Route::get('/ReserDestroy/{id}',[App\Http\Controllers\DestroyController::class, 'destroyReserva'])->name('ReserDestroy');
Route::get('/ReserAdd',         [App\Http\Controllers\AddController::class,     'createReserva'] )->name('ReserAdd');
Route::post('/ReserStore',      [App\Http\Controllers\StoreController::class,   'storeReserva']  )->name('ReserStore');
Route::post('/ReserUpdate/{id}',[App\Http\Controllers\UpdateController::class,  'updateReserva'] )->name('ReserUpdate');

Route::middleware('admin')->group(function(){
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
});

Route::middleware('funcionario')->group(function(){
    Route::get('/funcionario', [HomeController::class,'funcionario'])->name('funcionario');
});

Route::middleware('hospede')->group(function(){
    Route::get('/hospede', [HomeController::class, 'hospede'])->name('hospede');
});