<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

Route::get('/books', [BookController::class, 'index']);

Route::get('/genres', [GenreController::class, 'index']);

Route::get('/authors', [AuthorController::class, 'index']);
