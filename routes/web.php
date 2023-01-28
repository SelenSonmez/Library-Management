<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordController;
use App\Http\Middleware\AuthorizeMiddleware;
use App\Http\Middleware\isLoggedIn;
use App\Http\Middleware\isUserMiddleware;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;

Route::middleware(isLoggedIn::class)->group(function () {
    Route::get('/welcome', [UserController::class, 'main'])->name('direct');
    Route::get('/{id}/book-details', [BookController::class, 'viewBookDetails']);  //ortak

});
Route::get('/', [UserController::class, 'loginPage']);

Route::post('/login', [UserController::class, 'doLogin']);

Route::get('/register', [UserController::class, 'viewRegister']);

Route::post('/insert-user', [UserController::class, 'insertUser']);

Route::get('/logout', [UserController::class, 'logout']);
Route::get('/profile', [UserController::class, 'profile']);
Route::get('profile-info', [UserController::class, 'profileInfo']);
