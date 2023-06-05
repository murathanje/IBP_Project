<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;


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



Route::get('/logout/admin', [UsersController::class, 'logoutAdmin'])->name('logout.admin');
Route::get('/logout/user', [UsersController::class, 'logoutUser'])->name('logout.user');

Route::get('/admin/table', [AdminController::class, 'table'])->name('admin.table');

Route::get('/admin/create/user', [AdminController::class, 'createUser'])->name('admin.create.user');
Route::post('/admin/create/user/check', [AdminController::class, 'createUserCheck'])->name('admin.create.user.check');

Route::get('/admin/create/trip', [AdminController::class, 'createTrip'])->name('admin.create.trip');
Route::post('/admin/create/trip/check', [AdminController::class, 'createTripCheck'])->name('admin.create.trip.check');

Route::get('/admin/edit/user', [AdminController::class, 'editUser'])->name('admin.edit.user');
Route::post('/admin/edit/user/check', [AdminController::class, 'editUserCheck'])->name('admin.edit.user.check');

Route::get('/admin/edit/trip', [AdminController::class, 'editTrip'])->name('admin.edit.trip');
Route::post('/admin/edit/trip/check', [AdminController::class, 'editTripCheck'])->name('admin.edit.trip.check');

Route::get('/admin/delete/user', [AdminController::class, 'deleteUser'])->name('admin.delete.user');
Route::post('/admin/delete/user/check', [AdminController::class, 'deleteUserCheck'])->name('admin.delete.user.check');

Route::get('/admin/delete/trip', [AdminController::class, 'deleteTrip'])->name('admin.delete.trip');
Route::get('/admin/delete/trip/check', [AdminController::class, 'deleteTripCheck'])->name('admin.delete.trip.check');

Route::get('/admin/create/bus', [AdminController::class, 'createBus'])->name('admin.create.bus');
Route::post('/admin/create/bus/check', [AdminController::class, 'createBusCheck'])->name('admin.create.bus.check');

Route::get('/admin/create/station', [AdminController::class, 'createStation'])->name('admin.create.station');
Route::post('/admin/create/station/check', [AdminController::class, 'createStationCheck'])->name('admin.create.station.check');

Route::get('/admin/create/company', [AdminController::class, 'createCompany'])->name('admin.create.company');
Route::post('/admin/create/company/check', [AdminController::class, 'createCompanyCheck'])->name('admin.create.company.check');

Route::get('/admin/create/routes', [AdminController::class, 'createRoutes'])->name('admin.create.routes');
Route::post('/admin/create/routes/check', [AdminController::class, 'createRoutesCheck'])->name('admin.create.routes.check');

Route::get('/admin/edit/bus', [AdminController::class, 'editBus'])->name('admin.edit.bus');
Route::post('/admin/edit/bus/check', [AdminController::class, 'editBusCheck'])->name('admin.edit.bus.check');

Route::get('/admin/edit/station', [AdminController::class, 'editStation'])->name('admin.edit.station');
Route::post('/admin/edit/station/check', [AdminController::class, 'editStationCheck'])->name('admin.edit.station.check');

Route::get('/admin/edit/company', [AdminController::class, 'editCompany'])->name('admin.edit.company');
Route::post('/admin/edit/company/check', [AdminController::class, 'editCompanyCheck'])->name('admin.edit.company.check');

Route::get('/admin/edit/routes', [AdminController::class, 'editRoutes'])->name('admin.edit.routes');
Route::post('/admin/edit/routes/check', [AdminController::class, 'editRoutesCheck'])->name('admin.edit.routes.check');

Route::get('/admin/edit/ticket', [AdminController::class, 'editTickets'])->name('admin.edit.tickets');
Route::post('/admin/edit/ticket/check', [AdminController::class, 'editTicketCheck'])->name('admin.edit.tickets.check');

Route::get('/admin/create/ticket', [AdminController::class, 'createTickets'])->name('admin.create.tickets');
Route::post('/admin/create/ticket/check', [AdminController::class, 'createTicketCheck'])->name('admin.create.tickets.check');

Route::get('/admin/delete/bus', [AdminController::class, 'deleteBus'])->name('admin.delete.bus');
Route::post('/admin/delete/bus/check', [AdminController::class, 'deleteBusCheck'])->name('admin.delete.bus.check');

Route::get('/admin/delete/station', [AdminController::class, 'deleteStation'])->name('admin.delete.station');
Route::post('/admin/delete/station/check', [AdminController::class, 'deleteStationCheck'])->name('admin.delete.station.check');

Route::get('/admin/delete/company', [AdminController::class, 'deleteCompany'])->name('admin.delete.company');
Route::post('/admin/delete/company/check', [AdminController::class, 'deleteCompanyCheck'])->name('admin.delete.company.check');

Route::get('/admin/delete/routes', [AdminController::class, 'deleteRoute'])->name('admin.delete.routes');
Route::post('/admin/delete/routes/check', [AdminController::class, 'deleteRouteCheck'])->name('admin.delete.routes.check');

Route::get('/admin/delete/tickets', [AdminController::class, 'deleteTicket'])->name('admin.delete.tickets');
Route::post('/admin/delete/ticket/check', [AdminController::class, 'deleteTicketCheck'])->name('admin.delete.tickets.check');

Route::get('/account/panel', [AccountController::class, 'index'])->name('admin.account');

Route::get('/account/panel/biletal', [AccountController::class, 'index'])->name('account.panel.buyticket');
Route::get('/account/panel/mytickets', [AccountController::class, 'mytickets'])->name('account.panel.mytickets');
Route::get('/account/panel/myaccount', [AccountController::class, 'myaccount'])->name('account.panel.myaccount');
Route::post('/account/panel/myaccount/check', [AccountController::class, 'myaccountCheck'])->name('account.panel.myaccount.check');
Route::post('/account/panel/myaccount/delete', [AccountController::class, 'deleteAccount'])->name('account.panel.myaccount.delete');
Route::get('/account/panel/message', [AccountController::class, 'message'])->name('acaccount.panel.message');

Route::post('/account/panel/findticket', [AccountController::class, 'findticket'])->name('acaccount.panel.findticket');

Route::post('/account/panel/buyticket', [AccountController::class, 'buyticket'])->name('account.panel.buyticket');

Route::post('/account/panel/cancelticket', [AccountController::class, 'cancelticket'])->name('account.panel.cancelticket');



