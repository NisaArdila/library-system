<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\BookController;
use App\http\Controllers\CategoryController;
use App\http\Controllers\MembersController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/books', function () {
//     // return 'Daftar Buku';
//     return view('books.index');
// });

Route::get('/books', [BookController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/members', [MembersController::class, 'index']);
