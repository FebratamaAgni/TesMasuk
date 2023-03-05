<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/halaman1', [HomeController::class, 'hal1'])->name('hal1');
Route::get('/halaman2', [HomeController::class, 'hal2'])->name('hal2');
Route::get('/halaman3', [HomeController::class, 'hal3'])->name('hal3');

Route::get('/login', [PenggunaController::class, 'login'])->name('login');
Route::post('/login', [PenggunaController::class, 'masuk'])->name('masuk');

Route::get('/register', [PenggunaController::class, 'register'])->name('register');
Route::post('/register', [PenggunaController::class, 'daftar'])->name('daftar');
