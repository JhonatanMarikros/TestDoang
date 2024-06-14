<?php

use App\Http\Controllers\MakananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.home');
});

Route::get('/menu', function () {
    return view('main.menu');
});

// ADMIN
Route::get('/adminhome', function () {
    return view('admin.home', [
        'title' => 'Home'
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

Route::resource('adminmakanan', MakananController::class);

Route::get('/menu', [MakananController::class, 'showMenu'])->name('menu');
