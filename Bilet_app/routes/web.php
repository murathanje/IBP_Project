<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Front/pages/home');
});

Route::get('/home', function () {
    return view('Front/pages/home');
})->name('home');

Route::get('/giris', function () {
    return view('Front/pages/giris');
})->name('giris');

Route::get('/kayit', function () {
    return view('Front/pages/kayit');
})->name('kayit');

Route::get('/terms', function () {
    return view('Front/pages/terms');
})->name('terms');

Route::get('/privacy', function () {
    return view('Front/pages/privacy');
})->name('privacy');

Route::get('/about', function () {
    return view('Front/pages/about');
})->name('about');

Route::get('/account', function () {
    return view('Front/pages/account');
})->name('account');

Route::post('/loginCheck', 'AuthController@loginCheck')->name('loginCheck');
Route::post('/kayitCheck', 'AuthController@kayitCheck')->name('kayitCheck');



