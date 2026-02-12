<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "Nama: Mokhammad Ilham Putra Wijaya<br>NIM: 244107020139";
    }

    public function articles($id){
        return "Halaman Artikel dengan ID " . $id;
    }
}
