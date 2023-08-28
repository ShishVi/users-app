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

Route::get('/', [AppController::class, 'index'])->name('app.main');

Route::get('user', [UserController::class, 'userPage'])->name('user.page');
Route::get('countusers', [UserController::class, 'countUsers'])->name('user.countUsers');
