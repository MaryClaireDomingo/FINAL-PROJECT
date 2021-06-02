<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\StoryController;

use App\Models\User;






Route::get('/', [MasterController::class, 'front'])->name('front');
Route::get('/login', [MasterController::class, 'login'])->name('login');
Route::post('/login', [MasterController::class, 'loginUser']);

Route::get('/register', [MasterController::class, 'register'])->name('register');
Route::post('/register', [MasterController::class, 'registerUser']);

Route::post('/logout', [MasterController::class, 'logout'])->name('logout');



Route::get('/index', [MasterController::class, 'index'])->name('index');



Route::post('/inspirational', [StoryController::class, 'inspirational'])->name('inspirational');

Route::post('/laugh', [StoryController::class, 'laugh'])->name('laugh');

Route::post('/negative', [StoryController::class, 'negative'])->name('negative');

Route::post('/delete{id}', [StoryController::class, 'delete'])->name('delete');













Route::get('/section1', [MasterController::class, 'section1'])->name('section1');
Route::get('/section2', [MasterController::class, 'section2'])->name('section2');
Route::get('/section3', [MasterController::class, 'section3'])->name('section3');
Route::get('/section4', [MasterController::class, 'section4'])->name('section4');
Route::get('/section5', [MasterController::class, 'section5'])->name('section5');
Route::get('/section6', [MasterController::class, 'section6'])->name('section6');