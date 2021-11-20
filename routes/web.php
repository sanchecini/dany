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

Route::get('/', function() {
    return redirect()->route('login');
});


// Route::resource('productos', App\Http\Controllers\ProductoController::class);
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('productos', App\Http\Controllers\ProductoController::class);
Route::resource('precios', App\Http\Controllers\RelacionController::class);

Route::get('precios/agregar/{id}', 'App\Http\Controllers\RelacionController@agregar')->name('precios.agregar');;




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
