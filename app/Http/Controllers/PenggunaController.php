<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    // untuk tampilan login
    public function login(){
        return view('LoginRegister.login');
    }

    // fungsi autentikasi saat user login 
    public function masuk(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $validasi = [
            'username'=>$request->username,
            'password'=>$request->password
        ];

        if(Auth::guard('pengguna')->attempt($validasi)){
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
        return back();
    }

    // untuk tampilan register
    public function register(){
        return view('LoginRegister.register');
    }

    // fungsi autentikasi saat user registrasi
    public function daftar(Request $request){
       $validasi = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $validasi['password'] = bcrypt($validasi['password']);

        Pengguna::create($validasi);

        return redirect()->route('register');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
