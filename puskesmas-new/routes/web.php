<?php

use Illuminate\Support\Facades\Route;

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