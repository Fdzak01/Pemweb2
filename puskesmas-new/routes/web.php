<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('dashboard')->group(function () {
  
        Route::get('/' ,[AdminController::class, 'index']);
        
    });
    
        Route::prefix('kelurahan')->group(function () {
  
            Route::get('/' ,[KelurahanController::class, 'index']);

            //Kelurahan

            Route::get('/create',[KelurahanController::class,'create']);

            Route::post('/store',[KelurahanController::class,'store']);

            Route::get('/show/{id}', [KelurahanController::class,'show']);

            Route::get('/edit/{id}',[KelurahanController::class,'edit']);

            Route::put('/update/{id}',[KelurahanController::class,'update']);

            Route::delete('/destroy/{id}',[KelurahanController::class,'destroy']);
    
        });

        Route::prefix('pasien')->group(function () {

            Route::get('/',[PasienController::class, 'index']);

            Route::get('/create',[PasienController::class,'create']);

            Route::post('/store',[PasienController::class,'store']);
    
            Route::get('/show/{id}', [PasienController::class,'show']);
    
            Route::get('/edit/{id}',[PasienController::class,'edit']);
    
            Route::put('/update/{id}',[PasienController::class,'update']);
    
            Route::delete('pasien/destroy/{id}',[PasienController::class,'destroy']);

        });



    //Laravel 6-Praktikum
    


    
    //CRUD
    


    //Pasien



});

require __DIR__.'/auth.php';

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

// Route::get('/dashboard' ,[AdminController::class, 'index']);

Route::get('/contact' ,[ContactController::class, 'contact']);

Route::get('/about' ,[AboutController::class, 'about']);

Route::get('/service',[ServiceController::class,'service']);

// Praktikum Laravel 3

// Route::get('/kelurahan' ,[KelurahanController::class, 'index']);

//Tugas Laravel 3

// Route::get('pasien',[PasienController::class, 'index']);

// Praktikum Laravel 4

// Route::get('kelurahan/create',[KelurahanController::class,'create']);

// Route::post('kelurahan/store',[KelurahanController::class,'store']);

// Route::get('kelurahan/show/{id}', [KelurahanController::class,'show']);

//Tugas laravel 4

// Route::get('pasien/create',[PasienController::class,'create']);

// Route::post('pasien/store',[PasienController::class,'store']);

// Route::get('pasien/show/{id}', [PasienController::class,'show']);

//Praktikum Laravel 5
// Route::get('kelurahan/edit/{id}',[KelurahanController::class,'edit']);

// Route::put('kelurahan/update/{id}',[KelurahanController::class,'update']);

// Route::delete('kelurahan/destroy/{id}',[KelurahanController::class,'destroy']);

//Tugas Laravel 5
// Route::get('pasien/edit/{id}',[PasienController::class,'edit']);

// Route::put('pasien/update/{id}',[PasienController::class,'update']);

// Route::delete('pasien/destroy/{id}',[PasienController::class,'destroy']);