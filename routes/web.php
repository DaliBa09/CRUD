<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
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

Route::view('/', 'welcome')->name('home');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/producto/registrar', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos/{producto?}', [ProductoController::class, 'show'])->name('productos.show');
Route::get('/productos/{producto?}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::patch('/productos/{productos?}', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('/productos/{producto?}', [ProductoController::class, 'destroy'])->name('productos.destroy');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');



Route::view('/register', 'auth.registro')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);



