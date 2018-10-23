<?php

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/advantages', function () {
    return view('advantages');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/car', function () {
    return view('car');
});

Route::get('/p3', function () {
    return view('page3');
});
