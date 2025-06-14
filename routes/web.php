<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\GuestController;

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


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [GuestController::class, 'index'])->name('home');
    Route::get('/logout', [AuthCOntroller::class, 'logout'])->name('logout');
    Route::get('/detail', [GuestController::class, 'detail'])->name('produk.detail');
    Route::get('/checkout', [GuestController::class, 'checkout'])->name('produk.checkout');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('user.login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store'])->name('auth.store');


    Route::get('/login/google', [SocialController::class, 'googleRedirect'])->name('google.login');
    Route::get('/google/redirect', [SocialController::class, 'googleCallback']);

    Route::get('/login/facebook', [SocialController::class, 'facebookRedirect'])->name('facebook.login');
    Route::get('/facebook/redirect', [SocialController::class, 'facebookCallback']);
});
