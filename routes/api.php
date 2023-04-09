<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\PenggunaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/login', [PenggunaController::class, 'login'])->
// name('login');

Route::post('/login', [PenggunaController::class, 'postLogin'])->
name('postLogin');

// Route::get('/register', [PenggunaController::class, 'register'])->
// name('register');

Route::post('/register', [PenggunaController::class, 'postRegister'])->
name('postRegister');


Route::group(['middleware'=> ['auth:sanctum']], function(){
    Route::get('/home', [HalamanController::class, 'home'])->
    name('home');
    
    Route::get('/logout', [PenggunaController::class, 'logout'])->
    name('logout');
});

Route::group(['middleware'=> ['auth:sanctum', 'cekrole:admin,user']], function(){
    Route::get('/halaman1', [HalamanController::class, 'hal1'])->
    name('hal1');
});

Route::group(['middleware'=> ['auth:sanctum', 'cekrole:admin,seller']], function(){
    Route::get('/halaman2', [HalamanController::class, 'hal2'])->
    name('hal2');

    Route::get('/halaman3', [HalamanController::class, 'hal3'])->
    name('hal3');

});