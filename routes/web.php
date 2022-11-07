<?php

use App\Http\Controllers\CatalogoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\CatalogoPeriodoController;
use App\Http\Controllers\WebsiteController;

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
    return view('auth.login');
});

Route::resource('crud/empresa', EmpresaController::class)->names('crud.empresa');



Route::controller(CatalogoController::class)->group(function(){
    Route::get('catalogo', 'index');
    Route::get('catalogos-export', 'export')->name('catalogo.export');
    Route::post('catalogo-import', 'import')->name('catalogo.import');
});

Route::controller(CatalogoPeriodoController::class)->group(function(){
    Route::get('catalogoPeriodo', 'index');
    Route::post('catalogoPeriodo-import', 'import')->name('catalogoPeriodo.import');

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/crud', function () {
        return view('crud.index');})->name('crud');
});
