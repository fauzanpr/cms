<?php

// use App\Http\Controllers\PageController;
// use App\Http\Controllers\ArticleController;
// use App\Http\Controllers\AboutController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
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

// PRAKTIKUM 1

// Route::get('/', function () {
//     return "Hi! Selamat Datang di Website Laravel";
// });

// Route::get('/about', function () {
//     return "NIM : 2041720224 </br>
//     Nama : Fauzan Pradana </br>
//     Kelas : TI 2G";
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Ini adalah halaman Artikel dengan ID " . $id;
// });


//PRAKTIKUM 2

// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);


//PRAKTIKUM 2 [nomor 5]

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/articles/{id}', [ArticleController::class, 'articles']);


//PRAKTIKUM 3

// HALAMAN UTAMA
Route::get('/', [HomeController::class, 'index']);

// HALAMAN CATEGORY
Route::prefix('/category')->group( function () {
    Route::get('/marbel-edu-games', function () {
        return "INI ADALAH HALAMAN MARBEL EDU GAMES";
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return "INI ADALAH HALAMAN MARBEL AND FRIENDS KIDS GAMES";
    });
    Route::get('/riri-story-books', function () {
        return "RIRI STORY BOOKS";
    });
    Route::get('/kolak-kids-songs', function () {
        $lagu = "KOLAK - KOLAK - KOLAK";
        return $lagu;
    });
});

// HALAMAN NEWS
Route::prefix('/news')->group(function () {
    Route::get('/', function () {
        return "INI ADALAH HALAMAN UTAMA NEWS";
    });
    Route::get('/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19', function () {
        return "EDUCA STUDIO BERBAGI UNTUK WARGA SEKITAR TERDAMPAK COVID 19";
    });
});

// HALAMAN PROGRAM
Route::prefix('/program')->group(function () {
    Route::get('/karir', function () {
        return "KARIR : MENJADI DEVOPS DI GOOGLE"; 
    });
    Route::get('/magang', function () {
        return "MAGANG DIMANA YAK?";
    });
    Route::get('/kunjungan-industri', function () {
        return "KUNJUNGAN INDUSTRI YA";
    });
});

// Halaman About Us
Route::get('/about-us', [AboutController::class, 'about']);