<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda' , function(){
    return "Halaman Beranda";
});

Route::get('/salam', function(){
    return "Selamat Datang Dzakwan di laravel 11";
});

Route::get('/profile' ,function(){
    return "Halaman Profile";
});

// Praktikum Laravel 2

Route::get('/dashboard' ,[AdminController::class, 'index']);

Route::get('/contact' ,[ContactController::class, 'contact']);

Route::get('/about' ,[AboutController::class, 'about']);

Route::get('/service',[ServiceController::class,'service']);

// Praktikum Laravel 3

Route::get('/kelurahan' ,[KelurahanController::class, 'index']);

//Tugas Laravel 3

Route::get('/pasien',[PasienController::class, 'index']);