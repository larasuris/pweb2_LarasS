<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('beranda', function () {
    return view('beranda');
});
Route::get('login', function () {
    return view('login');
})->name('login');
Route::get('produk', function () {
    return view('produk');
});
Route::get('form', function () {
    return view('form');
});
Route::get('tabel', function () {
    return view('tabel');
});
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
Route::post('/beranda',[LoginController::class,'beranda'])->middleware('Auth')->name('beranda');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/produk',[LoginController::class,'index'])->name('produk');
Route::post('/simpan',[LoginController::class,'index'])->name('simpan');
