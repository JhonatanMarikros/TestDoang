<?php

use App\Http\Controllers\MakananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

Route::get('/', function () {
    return view('main.home');
});


Route::get('/location', [LocationController::class, 'mainPage'])->name('location.main');



// ADMIN
Route::get('/adminhome', function () {
    return view('admin.home', [
        'title' => 'Home'
    ]);
});



Route::get('/admincoupon', function () {
    return view('admin.coupon', [
        'title' => 'Minuman'
    ]);
});


Route::resource('adminmakanan', MakananController::class);

Route::get('/menu', [MakananController::class, 'showMenu'])->name('menu');
Route::resource('adminlocations', LocationController::class);
