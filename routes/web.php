<?php

use App\Http\Controllers\AmbulanceController;
use App\Http\Controllers\BloodbankController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/userregister', function () {
    return view('frontend.user.create');
});

Route::get('/finddonor', function () {
    return view('frontend.finddonor.fdonor');
});

Route::get('/donorlist', function () {
    return view('frontend.donor list.donors');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// usercontroller
Route::resource('user', UserController::class);

// ambulancecontroller
Route::resource('ambulance', AmbulanceController::class);

// bloodbankcontroller
Route::resource('bbank', BloodbankController::class);
