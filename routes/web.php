<?php

use App\Http\Controllers\WelcomeController;
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

Route::get('/', function () {
    return "Hi! Selamat Datang di Website Laravel";
});

Route::get('/about', function () {
    return "NIM : 2041720224 </br>
    Nama : Fauzan Pradana </br>
    Kelas : TI 2G";
});

Route::get('/articles/{id}', function ($id) {
    return "Ini adalah halaman Artikel dengan ID " . $id;
});