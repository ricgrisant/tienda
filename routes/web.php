<?php

use App\Http\Controllers\MensajeController;
use App\Http\Controllers\ProductoController;
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

// Productos
Route::get('/',[ProductoController::class,'index']);
Route::get('/productos/admin',[ProductoController::class,'adminIndex'])->middleware('auth');
Route::get('/productos/{id}',[ProductoController::class,'show']);
Route::post('/productos', [ProductoController::class,'store']);


// Mensajes
Route::get('/mensajes/crear', [MensajeController::class,'create']);
Route::post('/mensajes', [MensajeController::class,'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
