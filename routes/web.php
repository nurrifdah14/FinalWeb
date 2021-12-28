<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


// Transaksi
Route::get('/',[TransaksiController::class,'frontend'])->name('beranda');
Route::get('/transaksiuser',[TransaksiController::class,'frontendtransaksi'])->name('transaksiuser');
Route::get('/dashboard',[TransaksiController::class,'index'])->name('dashboard');
Route::get('/daftar-transaksi', [TransaksiController::class,'daftar']);
Route::get('/tambah-transaksi',[TransaksiController::class,'create'])->name('tambah-transaksi');
Route::post('/submit',[TransaksiController::class,'store'])->name('edit-transaksi');
Route::get('/edit/{id}', [TransaksiController::class, 'edit'])->name('edit-transaksi');
Route::put('/update/{id}', [TransaksiController::class, 'update'])->name('update-transaksi');
Route::get('/hapus-transaksi/{id}', [TransaksiController::class, 'destroy'])->name('hapus-transaksi');

//Register
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('register');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store'])->name('login');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
