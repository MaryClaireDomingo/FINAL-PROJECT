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
    return view('welcome');
});
Route::get('/', function () {
    return view('front');
});
Route::get('login', function () {
    return view('login');
});
Route::get('index', function () {
    return view('index');
});
Route::get('section2', function () {
    return view('section2');
});
Route::get('section3', function () {
    return view('section3');
});
Route::get('section4', function () {
    return view('section4');
});
Route::get('section5', function () {
    return view('section5');
});
Route::get('section6', function () {
    return view('section6');
});