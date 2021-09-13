<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "NIM &nbsp; &nbsp; : 2031710029 <br> NAMA  : Nissa Nursabrina"; 
    }

    public function articles($id){
        return "Halaman Artikel dengan ID $id ";
    }
}
