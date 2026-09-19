<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/books', function () {
//     // return 'Daftar Buku';
//     return view('books.index');
// });

Route::get('/books', [BookController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/members', [MemberController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);

Route::get('/books/{id}', function ($id) {
 return 'ID Buku: ' . $id;
});

Route::get('/members/{id}', function ($id) {
 return 'ID Member: ' . $id;
});

