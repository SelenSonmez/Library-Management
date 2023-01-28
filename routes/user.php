<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordController;
use App\Http\Middleware\AuthorizeMiddleware;
use App\Http\Middleware\isLoggedIn;
use App\Http\Middleware\isUserMiddleware;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;

Route::middleware(isUserMiddleware::class)
    ->prefix('/user')
    ->name('user')
    ->group(function () {

        Route::get('/', [UserController::class, 'viewUserPage']);
        Route::post('/insert', [UserController::class, 'insertUser'])->name('register');

        Route::prefix('{id}')->name('id')->group(function () {
            // Route::get('/edit', [BookController::class, 'editForm'])->name('edit');
            // Route::post('/update', [BookController::class, 'updateBook']);
            Route::get('/request-book', [BookController::class, 'requestBook']);
        });

        Route::get('/welcome', [UserController::class, 'userWelcomePage']);
        Route::get('/borrowed-books', [BookController::class, 'viewBorrowedBooks']);

        Route::get('/debt', [BookController::class, 'calculateDebt']);

        Route::post('/insert', [UserController::class, 'insertUser'])->name('register');

        Route::get('/debt-list', [UserController::class, 'debtList']);
        Route::get('/debts', [UserController::class, 'debts']);
    });
