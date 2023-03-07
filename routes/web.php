<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Middleware\CekRole;
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



// Route::get('/halaman2', [HalamanController::class, 'hal2'])->name('hal2');
Route::get('/halaman3', [HalamanController::class, 'hal3'])->name('hal3');

Route::get('/login', [PenggunaController::class, 'login'])->name('login');
Route::post('/login', [PenggunaController::class, 'postLogin'])->name('postLogin');

Route::get('/register', [PenggunaController::class, 'register'])->name('register');
Route::post('/register', [PenggunaController::class, 'postRegister'])->name('postRegister');

Route::get('/logout', [PenggunaController::class, 'logout'])->name('logout');

Route::group(['middleware'=> ['auth']], function(){
    Route::get('/home', [HalamanController::class, 'home'])->name('home');

});

Route::group(['middleware'=> ['auth', 'cekrole:admin']], function(){
    Route::get('/halaman1', [HalamanController::class, 'hal1'])->name('hal1');
});
Route::group(['middleware'=> ['auth', 'cekrole:user']], function(){
    Route::get('/halaman2', [HalamanController::class, 'hal2'])->name('hal2');
    
});