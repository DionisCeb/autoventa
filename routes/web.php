<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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

/**
 * User create
 */
Route::get('/auth', [AuthController::class, 'index'])->name('auth.index');
Route::post('/auth', [AuthController::class, 'create'])->name('auth.create');

/**
 * Login
 */
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile.index');
});
Route::get('/about', function () {
    return view('about.index');
});

Route::get('/catalog', function () {
    return view('car.index');
});

Route::get('/car', function () {
    return view('car.show');
});
Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/attributions', function () {
    return view('legal.attributions');
});


/**
 * Admin features
 */

 /**
  * Create car
  */

  Route::get('/car/create', function () {
    return view('car.create');
});