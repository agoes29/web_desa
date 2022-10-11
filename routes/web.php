<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('admin', [App\Http\Controllers\Administrator\DashboardController::class, 'index'])->name('dashboard');

Route::get('/umkm', [App\Http\Controllers\HomeController::class, 'umkm'])->name('umkm');

Route::get('/tabel', [App\Http\Controllers\HomeController::class, 'index3'])->name('check');

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::get('/', [App\Http\Controllers\HomeController::class, 'client'])->name('main');
