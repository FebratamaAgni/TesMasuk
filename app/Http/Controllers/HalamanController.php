<?php

namespace App\Http\Controllers;


class HalamanController extends Controller
{
    public function home(){
        return 'Ini adalah halaman home, bisa di buka disemua level pengguna.';
    }
    public function hal1(){
        return 'Ini adalah halaman 1, hanya bisa dibuka oleh admin dan user saja.';
    }
    public function hal2(){
        return 'Ini adalah halaman 2, bisa dibuka oleh admin dan seller saja.';
    }
    public function hal3(){
        return 'Ini adalah halaman 3, bisa dibuka oleh admin dan seller saja.';
    }
}
