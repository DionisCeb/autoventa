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
    return view('home');
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
