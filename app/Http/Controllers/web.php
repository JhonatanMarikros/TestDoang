<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

Route::get('/', function () {
    return view('main.home');
});
Route::get('/home', function () {
    return view('main.home');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/home', function () {
    return view('main.home');
})->name('home');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// ADMIN
Route::get('/adminhome', function () {
    return view('admin.home', [
        'title' => 'Home'
    ]);
});

Route::resource('adminuser', AdminUserController::class);

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
