<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;


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


Route::post('/loginCheck', [UsersController::class, 'login'])->name('loginCheck');
Route::post('/kayitCheck', [UsersController::class, 'create'])->name('kayitCheck');

// Back
Route::get('/admin/panel', [AdminController::class, 'index'])->name('admin.panel');


Route::get('/account', [AccountController::class, 'index'])->name('account');

Route::get('/logout', [UsersController::class, 'logout'])->name('logout');

Route::get('/admin/table', [AdminController::class, 'table'])->name('admin.table');

Route::get('/admin/create/user', [AdminController::class, 'createUser'])->name('admin.create.user');
Route::post('/admin/create/user/check', [AdminController::class, 'createUserCheck'])->name('admin.create.user.check');

Route::get('/admin/create/trip', [AdminController::class, 'createTrip'])->name('admin.create.trip');
Route::get('/admin/create/trip/check', [AdminController::class, 'createTripCheck'])->name('admin.create.trip.check');

Route::get('/admin/edit/user', [AdminController::class, 'editUser'])->name('admin.edit.user');
Route::get('/admin/edit/user/check', [AdminController::class, 'editUserCheck'])->name('admin.edit.user.check');

Route::get('/admin/edit/trip', [AdminController::class, 'editTrip'])->name('admin.edit.trip');
Route::get('/admin/edit/trip/check', [AdminController::class, 'editTripCheck'])->name('admin.edit.trip.check');

Route::get('/admin/delete/user', [AdminController::class, 'deleteUser'])->name('admin.delete.user');
Route::get('/admin/delete/user/check', [AdminController::class, 'deleteUserCheck'])->name('admin.delete.user.check');

Route::get('/admin/delete/trip', [AdminController::class, 'deleteTrip'])->name('admin.delete.trip');
Route::get('/admin/delete/trip/check', [AdminController::class, 'deleteTripCheck'])->name('admin.delete.trip.check');



