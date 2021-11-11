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
Route::get('/standard', [App\Http\Controllers\ViewController::class,     'viewStandard'])->name('standard_index');
Route::get('/premium',  [App\Http\Controllers\ViewController::class,     'viewPremium'])->name('premium_index');
Route::get('/deluxe',   [App\Http\Controllers\ViewController::class,     'viewDeluxe'])->name('deluxe_index');

Route::middleware('admin')->group(function () {
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
    //funcionario Crud
    Route::get('/FuncView',        [App\Http\Controllers\ViewController::class,    'viewFuncionario'])->name('FuncView'); //
    Route::get('/FuncEdit/{id}',   [App\Http\Controllers\EditController::class,    'editFuncionario'])->name('FuncEdit'); //
    Route::get('/FuncShow/{id}',   [App\Http\Controllers\ShowController::class,    'showFuncionario'])->name('FuncShow'); //
    Route::get('/FuncDestroy/{id}', [App\Http\Controllers\DestroyController::class, 'destroyFuncionario'])->name('FuncDestroy'); //
    Route::get('/FuncAdd',         [App\Http\Controllers\AddController::class,     'createFuncionario'])->name('FuncAdd'); //
    Route::post('/FuncStore',      [App\Http\Controllers\StoreController::class,   'storeFuncionario'])->name('FuncStore'); //
    Route::post('/FuncUpdate/{id}', [App\Http\Controllers\UpdateController::class,  'updateFuncionario'])->name('FuncUpdate'); //

    //hospede Crud
    Route::get('/HospView',        [App\Http\Controllers\ViewController::class,    'viewHospede'])->name('HospView'); //
    Route::get('/HospEdit/{id}',   [App\Http\Controllers\EditController::class,    'editHospede'])->name('HospEdit'); //
    Route::get('/HospShow/{id}',   [App\Http\Controllers\ShowController::class,    'showHospede'])->name('HospShow'); //
    Route::get('/HospDestroy/{id}', [App\Http\Controllers\DestroyController::class, 'destroyHospede'])->name('HospDestroy'); //
    Route::get('/HospAdd',         [App\Http\Controllers\AddController::class,     'createHospede'])->name('HospAdd'); //
    Route::post('/HospStore',      [App\Http\Controllers\StoreController::class,   'storeHospede'])->name('HospStore'); //
    Route::post('/HospUpdate/{id}', [App\Http\Controllers\UpdateController::class,  'updateHospede'])->name('HospUpdate'); //

    //produto Crud
    Route::get('/ProdView',        [App\Http\Controllers\ViewController::class,    'viewProduto'])->name('ProdView'); //
    Route::get('/ProdEdit/{id}',   [App\Http\Controllers\EditController::class,    'editProduto'])->name('ProdEdit'); //
    Route::get('/ProdShow/{id}',   [App\Http\Controllers\ShowController::class,    'showProduto'])->name('ProdShow'); //
    Route::get('/ProdDestroy/{id}', [App\Http\Controllers\DestroyController::class, 'destroyProduto'])->name('ProdDestroy'); //
    Route::get('/ProdAdd',         [App\Http\Controllers\AddController::class,     'createProduto'])->name('ProdAdd'); //
    Route::post('/ProdStore',      [App\Http\Controllers\StoreController::class,   'storeProduto'])->name('ProdStore'); //
    Route::post('/ProdUpdate/{id}', [App\Http\Controllers\UpdateController::class,  'updateProduto'])->name('HospUpdate'); //

    //reserva Crud
    Route::get('/ReserView',        [App\Http\Controllers\ViewController::class,    'viewReserva'])->name('ReserView'); //
    Route::get('/ReserViewHosp',    [App\Http\Controllers\ViewController::class, 'viewReservaHosp'])->name('ReserViewHosp'); //
    Route::get('/ReserEdit1/{id}',  [App\Http\Controllers\EditController::class,    'editReserva1'])->name('ReserEdit1');
    Route::get('/ReserEdit2/{id}/{Uid}', [App\Http\Controllers\EditController::class, 'editReserva2'])->name('ReserEdit2');
    Route::get('/ReserShow/{id}',   [App\Http\Controllers\ShowController::class,    'showReserva'])->name('ReserShow');
    Route::get('/ReserDestroy/{id}', [App\Http\Controllers\DestroyController::class, 'destroyReserva'])->name('ReserDestroy');
    Route::get('/ReserAdd1',         [App\Http\Controllers\AddController::class,     'createReserva1'])->name('ReserAdd1'); //
    Route::get('/ReserAdd2/{id}',    [App\Http\Controllers\AddController::class,     'createReserva2'])->name('ReserAdd2'); //
    Route::post('/ReserStore/{id}',      [App\Http\Controllers\StoreController::class,   'storeReserva'])->name('ReserStore'); //
    Route::post('/ReserUpdate/{id}', [App\Http\Controllers\UpdateController::class,  'updateReserva'])->name('ReserUpdate');

    //tipo quarto Crud
    Route::get('/TQuartoView',        [App\Http\Controllers\ViewController::class,    'viewTiposQuarto'])->name('TQuartoView'); //
    Route::get('/TQuartoEdit/{id}',   [App\Http\Controllers\EditController::class,    'editTiposQuarto'])->name('TQuartoEdit');
    Route::get('/TQuartoShow/{id}',   [App\Http\Controllers\ShowController::class,    'showTiposQuarto'])->name('TQuartoShow');
    Route::get('/TQuartoDestroy/{id}', [App\Http\Controllers\DestroyController::class, 'destroyTiposQuarto'])->name('TQuartoDestroy');
    Route::get('/TQuartoAdd',         [App\Http\Controllers\AddController::class,     'createTiposQuarto'])->name('TQuartoAdd');
    Route::post('/TQuartoStore', [App\Http\Controllers\StoreController::class,   'storeTiposQuarto'])->name('TQuartoStore'); //  
    Route::post('/TQuartoUpdate/{id}', [App\Http\Controllers\UpdateController::class,  'updateTiposQuarto'])->name('TQuartoUpdate');
    
    // consumo Crud
    Route::post('/consView/{id}',        [App\Http\Controllers\ViewController::class,    'viewConsumo'])->name('consView'); //
    Route::get('/consDestroy/{id}/Reserva/{LID}', [App\Http\Controllers\DestroyController::class, 'destroyListaConsumo'])->name('consDestroy'); //
    Route::post('/consStore/{id}',[App\Http\Controllers\StoreController::class,   'storeConsumo'])->name('consStore'); //
    Route::post('/consUpdate/{id}', [App\Http\Controllers\UpdateController::class,  'updateConsumo'])->name('consUpdate'); //
});

Route::middleware('funcionario')->group(function () {
    Route::get('/funcionario', [HomeController::class, 'funcionario'])->name('funcionario');
    //reserva Crud
    Route::get('/ReserView',        [App\Http\Controllers\ViewController::class,    'viewReserva'])->name('ReserView'); //
    Route::get('/ReserViewHosp',    [App\Http\Controllers\ViewController::class, 'viewReservaHosp'])->name('ReserViewHosp'); //
    Route::get('/ReserEdit1/{id}',  [App\Http\Controllers\EditController::class,    'editReserva1'])->name('ReserEdit1');
    Route::get('/ReserEdit2/{id}/{Uid}', [App\Http\Controllers\EditController::class, 'editReserva2'])->name('ReserEdit2');
    Route::get('/ReserShow/{id}',   [App\Http\Controllers\ShowController::class,    'showReserva'])->name('ReserShow');
    Route::get('/ReserDestroy/{id}', [App\Http\Controllers\DestroyController::class, 'destroyReserva'])->name('ReserDestroy');
    Route::get('/ReserAdd1',         [App\Http\Controllers\AddController::class,     'createReserva1'])->name('ReserAdd1'); //
    Route::get('/ReserAdd2/{id}',    [App\Http\Controllers\AddController::class,     'createReserva2'])->name('ReserAdd2'); //
    Route::post('/ReserStore/{id}',      [App\Http\Controllers\StoreController::class,   'storeReserva'])->name('ReserStore'); //
    Route::post('/ReserUpdate/{id}', [App\Http\Controllers\UpdateController::class,  'updateReserva'])->name('ReserUpdate');

    //hospede Crud
    Route::get('/HospView',        [App\Http\Controllers\ViewController::class,    'viewHospede'])->name('HospView'); //
    Route::get('/HospEdit/{id}',   [App\Http\Controllers\EditController::class,    'editHospede'])->name('HospEdit'); //
    Route::get('/HospShow/{id}',   [App\Http\Controllers\ShowController::class,    'showHospede'])->name('HospShow'); //
    Route::get('/HospDestroy/{id}', [App\Http\Controllers\DestroyController::class, 'destroyHospede'])->name('HospDestroy'); //
    Route::get('/HospAdd',         [App\Http\Controllers\AddController::class,     'createHospede'])->name('HospAdd'); //
    Route::post('/HospStore',      [App\Http\Controllers\StoreController::class,   'storeHospede'])->name('HospStore'); //
    Route::post('/HospUpdate/{id}', [App\Http\Controllers\UpdateController::class,  'updateHospede'])->name('HospUpdate'); //

    // consumo Crud
    Route::get('/consView/{id}',        [App\Http\Controllers\ViewController::class,    'viewConsumo'])->name('consView'); //
    Route::get('/consDestroy/{id}/Reserva/{LID}', [App\Http\Controllers\DestroyController::class, 'destroyListaConsumo'])->name('consDestroy'); //
    Route::post('/consStore/{id}',      [App\Http\Controllers\StoreController::class,   'storeConsumo'])->name('consStore'); //
    Route::post('/consUpdate/{id}', [App\Http\Controllers\UpdateController::class,  'updateConsumo'])->name('consUpdate'); //
});



Route::middleware('hospede')->group(function () {
    Route::get('/hospede', [HomeController::class, 'hospede'])->name('hospede');

    Route::get('/Reserva',    [App\Http\Controllers\ViewController::class, 'viewReserva2'])->name('reserva2');
    //Route::post('/ReservaHospStore/{id}', [App\Http\Controllers\UpdateController::class,  'reservaHospStore'])->name('ReservaHospStore');

    Route::get('/Perfil',     [App\Http\Controllers\ViewController::class, 'viewPerfil'])->name('perfil');
    Route::get('/ajuda',      [App\Http\Controllers\ViewController::class, 'viewAjuda'])->name('ajuda');


    Route::get('/Perfil/edit',[App\Http\Controllers\EditController::class, 'perfilEdit'])->name('perfilEdit');
    Route::post('/PerfilUpdate/{id}', [App\Http\Controllers\UpdateController::class,  'perfilUpdate'])->name('perfilUpdate');
    Route::get('/PerfilDestroy', [App\Http\Controllers\DestroyController::class, 'destroyPerfil'])->name('destroyPerfil'); //
});