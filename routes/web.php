<?php

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

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/struktur-organisasi', function () {
    return view('pages.struktur-organisasi');
});

Route::get('/berita', function () {
    return view('pages.articles');
});

Route::get('/profil-desa', function () {
    return view('pages.profil-desa');
});
