<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return inertia('Index/Index');
// });
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/hello', [IndexController::class, 'show'])->name('hello');

Route::resource('/listing', ListingController::class);//->except(['destroy']);//->only(['index','show','create','store']);


Route::get('login',[AuthController::class, 'create'] )->name('login');
Route::post('login',[AuthController::class, 'store'] )->name('login.store');
Route::delete('logout',[AuthController::class, 'destroy'] )->name('logout');
