<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\signinController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\bookingformController;
use App\Http\Controllers\bookingsController;
use App\Http\Controllers\editAccountController;
use App\Http\Controllers\AdminSigninController;
use App\Http\Controllers\TruckServicesController;
use App\Http\Controllers\AddTruckController;
use App\Http\Controllers\TruckServicesDetailsController;
use App\Http\Controllers\UserBookingsController;
use App\Http\Controllers\resetPassword;
use App\Http\Controllers\TripDetailsController;
use App\Http\Controllers\CancelController;

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

// php artisan make:controller signupController

Route::get('/', function () {return view('index');});

Route::get('/login',[signinController::class, 'index'])->name('login');
Route::post('/loginauth',[signinController::class, 'store']);
Route::get('/logout',[signinController::class, 'destroy']);

Route::get('/signup',[signupController::class, 'index']);
Route::post('/register',[signupController::class, 'store']);

Route::get('/home',[homeController::class, 'index'])->name('home');

Route::get('/booking-form/{id}/{date}',[bookingformController::class, 'index'])->name('booking-form');
Route::post('/booking/{id}',[bookingformController::class, 'book_form']);

Route::get('/bookings',[bookingsController::class, 'index'])->name('bookings');

Route::get('/editaccount',[editAccountController::class, 'index'])->name('editAccount');
Route::post('/update/{id}', [editAccountController::class, 'update']);

Route::get('/reset_Password',[resetPassword::class, 'index']);
Route::post('/change',[resetPassword::class, 'change']);

//--------------------ADMIN CONTROLLERS------------------------------------

Route::get('/adminsignin',[AdminSigninController::class, 'index']);
Route::post('/adminAuth',[AdminSigninController::class, 'store']);

Route::get('/truck-services', [TruckServicesController::class, 'index' ]);

Route::get('/add-new-truck-service',[AddTruckController::class,'index'])->name('add-new-truck-service');
Route::post('/addTruck',[AddTruckController::class,'addTruck']);

Route::get('/truck-services-details/{id}',[TruckServicesDetailsController::class, 'index']);
Route::post('/updateDriver/{id}',[TruckServicesDetailsController::class, 'update']);

Route::get('/user-bookings',[UserBookingsController::class, 'index'])->name('user-bookings');
Route::post('/confirmPayment/{id}',[UserBookingsController::class, 'confirmPayment']);
Route::post('/cancelTrip/{id}',[UserBookingsController::class, 'cancelTrip']);

Route::get('/trip-details', [TripDetailsController::class, 'index']);

Route::get('/cancel', [CancelController::class, 'index'] );

// Route::get('/canceled', [CancelController::class], 'index')->name('canceled');
// Route::get('/canceled', 'App\Http\Controllers\CancelController@index');
// Route::get('/user-bookings', function () {
//     return view('admin/user-bookings');
// });
// Route::get('/add-new-truck-service', function () {
//     return view('admin/add-new-truck-service');
// });
// Route::get('/admin-billing', function () {
//     return view('admin/admin-billing-list');
// });
// Route::get('/admin-view-billing', function () {
//     return view('admin/admin-view-bill');
// });
// Route::get('/admin-panel', function () {
//     return view('admin/admin-panel');
// });
// Route::get('/truck-services', function () {
//     return view('admin/truck-services');
// });
// Route::get('/adminsignin', function () {
// });