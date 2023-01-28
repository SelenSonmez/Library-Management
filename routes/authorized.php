<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordController;
use App\Http\Middleware\AuthorizeMiddleware;
use App\Http\Middleware\isLoggedIn;
use App\Http\Middleware\isUserMiddleware;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;

Route::middleware(AuthorizeMiddleware::class)
    ->prefix('/authorized')
    ->name('authorized')
    ->group(function () {
        Route::prefix('/admin')->group(function () {

            Route::middleware(isAdmin::class)->group(function () {
                Route::get('/{id}/remove-staff', [UserController::class, 'removeStaff'])->name('remove');
                Route::get('/staff-list', [UserController::class, 'viewStaffList']);
            });
        });
        Route::prefix('/{id}')->name('id')->group(function () {
            Route::get('/edit', [BookController::class, 'viewEdit'])->name('edit');
            // Route::post('/update', [ProductsController::class, 'update']);
            // Route::get('/remove-staff', [UserController::class, 'removeStaff'])->name('remove');
            Route::post('/update-book', [BookController::class, 'updateBook']);
            Route::get('/return-book', [BookController::class, 'returnBook']);
            Route::get('/remove-book', [BookController::class, 'removeBook']);
        });
        Route::get('/list-books', [UserController::class, 'viewStaffPage'])->name('staff');

        Route::get('/register', [UserController::class, 'viewRegister']);

        Route::get('/borrowed-books', [BookController::class, 'viewBorrowedBooks']);

        Route::get('/debt', [BookController::class, 'calculateDebt']);
        // Route::get('/{id}/edit', [BookController::class, 'viewEdit']);

        Route::post('/insert', [BookController::class, 'insertBook']);

        Route::get('/enter-book', [BookController::class, 'viewEnterBook']);

        Route::get('/all-borrowed', [BookController::class, 'viewAllBorrowed']);

        Route::get('/staff', [UserController::class, 'viewStaffPage']);
    });
