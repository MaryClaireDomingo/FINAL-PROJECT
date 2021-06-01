<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;

use App\Models\User;






Route::get('/', [MasterController::class, 'front'])->name('front');
Route::get('/login', [MasterController::class, 'login'])->name('login');

Route::post('/login', [MasterController::class, 'loginAdmin']);


Route::get('/index', [MasterController::class, 'index'])->name('index');

Route::get('/section1', [MasterController::class, 'section1'])->name('section1');
Route::get('/section2', [MasterController::class, 'section2'])->name('section2');
Route::get('/section3', [MasterController::class, 'section3'])->name('section3');
Route::get('/section4', [MasterController::class, 'section4'])->name('section4');
Route::get('/section5', [MasterController::class, 'section5'])->name('section5');
Route::get('/section6', [MasterController::class, 'section6'])->name('section6');