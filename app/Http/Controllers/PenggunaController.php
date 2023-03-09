<?php

namespace App\Http\Controllers;

use App\Jobs\QueueEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PenggunaController extends Controller
{
    // untuk tampilan login
    public function login(){
        // jika pengguna sudah login, maka tidak bisa membuka halaman login/register sebelum logout
        if(Auth::check()){
            return redirect()->route('home');
        };
        return view('LoginRegister.login');
    }

    // fungsi autentikasi saat user login 
    public function postLogin(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('home');
        }
        return back();
    }

    // untuk tampilan register
    public function register(){
        // jika pengguna sudah login, maka tidak bisa membuka halaman login/register sebelum logout
        if(Auth::check()){
            return redirect()->route('home');
        };
        return view('LoginRegister.register');
    }

    // fungsi autentikasi saat user registrasi
    public function postRegister(Request $request){
        $validasi = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $validasi['password'] = bcrypt($validasi['password']);

        User::create($validasi);
        
        
        // untuk mengirim email(Queue) setiap mendaftar akun baru
        QueueEmail::dispatch($request->email);
        
        return redirect()->route('register');
    }

    // fungsi logout
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    
}
