<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::apiResource('genre', GenreController::class);
Route::apiResource('author', AuthorController::class);
Route::apiResource('book', BookController::class);