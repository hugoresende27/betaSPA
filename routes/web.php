<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserAccountController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return inertia('Index/Index');
// });
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/hello', [IndexController::class, 'show'])->middleware('auth')->name('hello');

Route::resource('/listing', ListingController::class)
        ->only(['create','store','edit','update','destroy']) //only auth can edit or add listing
        ->middleware('auth');//->except(['destroy']);//->only(['index','show','create','store']);

Route::resource('/listing', ListingController::class)
        ->except(['create','store','edit','update','destroy']); //this will make index and show works without auth

Route::get('login',[AuthController::class, 'create'] )->name('login');
Route::post('login',[AuthController::class, 'store'] )->name('login.store');
Route::delete('logout',[AuthController::class, 'destroy'] )->name('logout');

Route::resource('user-account', UserAccountController::class)->only(['create', 'store']);
