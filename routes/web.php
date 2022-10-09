<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
    return view('dashboard');
});

// Auth::routes();

Route::get('admin', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index2'])->name('homepage');

Route::get('/', [App\Http\Controllers\HomeController::class, 'client'])->name('main');
Route::get('/umkm', [App\Http\Controllers\HomeController::class, 'umkm'])->name('umkm');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');

Route::get('/tabel', [App\Http\Controllers\HomeController::class, 'index3'])->name('check');
