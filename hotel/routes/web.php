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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/standard', [App\Http\Controllers\StandardController::class, 'index'])->name('standard_index');
Route::get('/premium', [App\Http\Controllers\PremiumController::class, 'index'])->name('premium_index');
Route::get('/deluxe', [App\Http\Controllers\DeluxeController::class, 'index'])->name('deluxe_index');

Route::get('/adm',            [App\Http\Controllers\ViewController::class,    'viewAdmin']   )->name('adm');
Route::get('/edit/{id}',      [App\Http\Controllers\EditController::class,    'editAdmin']   )->name('adm_edit');
Route::get('/admShow/{id}',   [App\Http\Controllers\ShowController::class,    'showAdmin']   )->name('adm_show');
Route::get('/admDestroy/{id}',[App\Http\Controllers\DestroyController::class, 'destroyAdmin'])->name('adm_destroy');
Route::get('/admAdd',         [App\Http\Controllers\AddController::class,     'addAdm']    )->name('adm_add');
Route::post('/admStore',      [App\Http\Controllers\StoreController::class,   'storeAdm']  )->name('adm_store');
Route::post('/admUpdate/{id}',[App\Http\Controllers\UpdateController::class,  'updateAdmin'] )->name('adm_update');

Route::middleware('admin')->group(function(){
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
});

Route::middleware('funcionario')->group(function(){
    Route::get('/funcionario', [HomeController::class,'funcionario'])->name('funcionario');
});

Route::middleware('hospede')->group(function(){
    Route::get('/hospede', [HomeController::class, 'hospede'])->name('hospede');
});