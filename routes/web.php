<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaketController;

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
//Auth::routes();

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');

// Route::middleware(['auth', 'user-access:user'])->group(function () {

//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });

// Route::middleware(['auth', 'user-access:admin'])->group(function () {

//     Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
// });


Route::controller(AuthController::class)->group(function(){

    Route::get('login', 'index')->name('login');
    Route::post('validasi_login', 'validasi_login')->name('validasi_login');
    Route::get('register', 'register')->name('register');
    Route::post('registrasi', 'registrasi')->name('registrasi');
});

Route::controller(HomeController::class)->group(function(){

    Route::get('home', 'home')->name('home');

});

Route::controller(PaketController::class)->group(function(){

    Route::get('paket', 'paket')->name('paket');

});
