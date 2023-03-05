<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    public function login(){
        return view('LoginRegister.login');
    }
    public function masuk(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $validasi = [
            'username'=>$request->username,
            'password'=>$request->password
        ];
        if(Auth::attempt($validasi)){
            return 'sukses';
        }
        else{
            return 'login gagal';
        }
    }

    public function register(){
        return view('LoginRegister.register');
    }
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
}
