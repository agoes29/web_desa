<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
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

/* Home Route */
Route::get('/', [App\Http\Controllers\HomeController::class, 'client'])->name('main');
Route::get('/umkm', [App\Http\Controllers\HomeController::class, 'umkm'])->name('umkm');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/profil', [App\Http\Controllers\HomeController::class, 'profil'])->name('profil');
Route::resource('blogshow', App\Http\Controllers\BlogShow::class);

/* Auth Route */
Route::get('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');

/* Dashboard Route */
Route::get('admin', [App\Http\Controllers\Administrator\DashboardController::class, 'index'])->name('dashboard');
Route::get('tabel', [App\Http\Controllers\Administrator\DashboardController::class, 'table'])->name('check');

//Blog Route
Route::get('bloginput', [App\Http\Controllers\BlogController::class, 'bloginput'])->name('BlogInput');
Route::resource('/admin/blog', App\Http\Controllers\BlogController::class);

//Slider Route
Route::get('homeinput', [App\Http\Controllers\HomepageController::class, 'homeinput'])->name('HomeInput');
Route::resource('/admin/home', App\Http\Controllers\HomepageController::class);

//Umkm Route
Route::get('umkminput', [App\Http\Controllers\UmkmController::class, 'umkminput'])->name('UmkmInput');
Route::resource('/admin/umkm', App\Http\Controllers\UmkmController::class);

// Route::get('surat', [App\Http\Controllers\SuratController::class, 'index'])->name('Surat');
Route::resource('suratcontroller', App\Http\Controllers\SuratController::class);
Route::get('/admin/surat', [App\Http\Controllers\SuratController::class, 'suratadmin'])->name('SuratAdmin');
Route::get('download',[App\Http\Controllers\SuratController::class, 'download']);
Route::view('/suratkematian', 'client/sm/suratkematian');

// Route::view('/penduduk', 'client/page/penduduk');
// Route::view('/penduduk1', 'client/page/penduduk1');
// Route::view('/penduduk2', 'client/page/penduduk2');
// Route::view('/penduduk3', 'client/page/penduduk3');
// Route::view('/wilayah', 'client/page/wilayah');
// Route::view('/asetdesa', 'client/page/asetdesa');
// Di Hide Jangan Lupa Uncomment


