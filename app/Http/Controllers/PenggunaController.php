<?php

namespace App\Http\Controllers;

use App\Mail\kirimEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PenggunaController extends Controller
{
    // untuk tampilan login
    public function login(){
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
        return view('LoginRegister.register');
    }

    // fungsi autentikasi saat user registrasi
    public function postRegister(Request $request){
       $request->validate([
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $request['password'] = bcrypt($request['password']);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ];
        User::create($data);
        
        Mail::to($request->email)->send(new kirimEmail());
        return redirect()->route('register');
    }

    // fungsi logout
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    
}
