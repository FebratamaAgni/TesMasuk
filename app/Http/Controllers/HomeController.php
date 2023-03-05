<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('HalamanDepan.home');
    }
    public function hal1(){
        return view('HalamanDepan.halaman1');
    }
    public function hal2(){
        return view('HalamanDepan.halaman2');
    }
    public function hal3(){
        return view('HalamanDepan.halaman3');
    }
}
