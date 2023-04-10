<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Jobs\QueueEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class PenggunaController extends Controller
{
    // fungsi autentikasi saat user login 
    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Salah cuyyy']
            ]);
        }
        return $user->createToken($request->email)->plainTextToken;
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
        
        return 'Berhasil Daftar Akun!';
    }

    // fungsi logout (menghapus token yang sedang digunakan)
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return 'Berhasil Logout!';
    }
    
}
