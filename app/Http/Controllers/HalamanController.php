<?php

namespace App\Http\Controllers;


class HalamanController extends Controller
{
    public function home(){
        return view('Halaman.home');
    }
    public function hal1(){
        return view('Halaman.halaman1');
    }
    public function hal2(){
        return view('Halaman.halaman2');
    }
    public function hal3(){
        return view('Halaman.halaman3');
    }
}
