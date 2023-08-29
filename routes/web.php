<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;
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


Route::get('/', [UserController::class, 'userPage'])->name('app.main');
Route::get('countusers', [UserController::class, 'countUsers'])->name('user.countUsers');
Route::get('top-name', [UserController::class, 'topNameUsers'])->name('user.topName');
Route::get('average-age', [UserController::class, 'averageAgeUsers'])->name('user.averageAge');
