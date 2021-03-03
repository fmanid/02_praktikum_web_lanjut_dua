<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "Nim: 2041723008";
        echo "<br>";
        echo "Nama: Firman Nugroho";
    }
    public function articles($id){
        return "Halaman Artikel dengan ID ke $id";
    }   
    
}
