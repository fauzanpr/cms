<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        echo "Hi! Selamat Datang di Website Laravel";
    } 

    public function about() {
        echo "NIM : 2041720224<br>Nama : Fauzan Pradana<br>Kelas : TI 2G";
    }

    public function articles($id) {
        echo "Ini adalah halaman Artikel dengan Id: " . $id;
    }
}
