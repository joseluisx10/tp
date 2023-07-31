<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('categorias', [
        CategoriaController::class, 'index'
    ])->name('categorias.index');
    
    Route::get('categorias/{categoria}', [
        CategoriaController::class, 'show'
    ])->name('categorias.show');

    Route::group(['middleware' => ['is_admin']], function () {
        Route::resource('productos', ProductoController::class);
    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/producto/detalle/{id}', [App\Http\Controllers\HomeController::class, 'detalle'])->name('detalle');