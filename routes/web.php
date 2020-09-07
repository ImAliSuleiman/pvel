<?php

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
    // return view('welcome');
    return view('blip');
});

Route::get('/intro', function () {
    return view('intro');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/lte', function () {
    return view('lte_dash');
});

Route::get('/lte-login', function () {
    return view('lte_login');
});

Route::get('/lte-register', function () {
    return view('lte_register');
});

Route::get('/prime-login', function () {
    return view('prime_login');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/biz', function () {
    return view('biz');
});

Route::any('{slug}', function () {
    return view('home');
});
