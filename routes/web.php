<?php

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

Route::get('/adminmakanan', function () {
    return view('admin.makanan', [
        'title' => 'Makanan'
    ]);
});

Route::get('/adminminuman', function () {
    return view('admin.minuman', [
        'title' => 'Minuman'
    ]);
});

Route::get('/admincoupon', function () {
    return view('admin.coupon', [
        'title' => 'Minuman'
    ]);
});

Route::resource('adminlocations', LocationController::class);