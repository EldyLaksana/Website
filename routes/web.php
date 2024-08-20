<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {
    // Backend

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/dashboard/artikel', ArtikelController::class);

    Route::resource('/dashboard/kategori', KategoriController::class);

    Route::get('/dashboard/artikel/create/checkSlug', [ArtikelController::class, 'checkSlug']);
});

// Frontend

Route::get('/', [FrontendController::class, 'index']);

Route::get('/tentangkami', [FrontendController::class, 'about']);

Route::get('/sambutan', [FrontendController::class, 'sambutan']);

Route::get('/visidanmisi', [FrontendController::class, 'visidanmisi']);

Route::get('/produk', [FrontendController::class, 'produk']);

Route::get('/produk/hitam', [FrontendController::class, 'hitam']);

Route::get('/produk/merah', [FrontendController::class, 'merah']);

Route::get('/produk/ungu', [FrontendController::class, 'ungu']);

Route::get('/produk/biru', [FrontendController::class, 'biru']);

Route::get('/produk/tempong', [FrontendController::class, 'tempong']);

Route::get('/artikel', [FrontendController::class, 'artikel']);

Route::get('/artikel/{artikel:slug}', [FrontendController::class, 'show']);

Route::get('/kontak', [FrontendController::class, 'kontak']);

Route::get('/karir', [FrontendController::class, 'karir']);

Route::get('/kategoris/{kategori:slug}', [FrontendController::class, 'kategori']);
// End
