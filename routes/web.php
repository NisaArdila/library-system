<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Route yang hanya boleh diakses setelah login
    Route::resource('books', BookController::class);
    Route::get('/categories', [CategoryController::class, 'index'])
        ->name('categories.index');
    Route::get('/members', [MemberController::class, 'index'])
        ->name('members.index');

    Route::middleware('can:manage-users')->group(function () {
        // Route::resource('users', UserController::class);
        Route::get('/users', function () {
            return view('users.index');
        })->name('users.index');
    });
});
