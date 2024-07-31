<?php

use App\Http\Controllers\CommerceController;
use App\Models\Organizations;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\OrganizationController;

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
//     return view('pages.welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('pages.welcome');

Route::get('/struktur-organisasi', function () {
    return view('pages.struktur-organisasi');
});

// Route::get('/berita', function () {
//     return view('pages.articles.index');
// });

Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('news.show');

// Route::get('/berita/detail', function () {
//     return view('pages.articles.show');
// });

Route::get('/profil-desa', function () {
    return view('pages.profil-desa');
});

// Route::get('/wirausaha', function () {
//     return view('pages.wirausaha.index');
// });
Route::get('/wirausaha', [CommerceController::class, 'index'])->name('wirausaha.index');
Route::get('/wirausaha/{id}', [CommerceController::class, 'show'])->name('wirausaha.show');

Route::get('/wirausaha/detail', function () {
    return view('pages.wirausaha.show');
});
