<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;

Route::get('/books/create', [BookController::class, 'create']);

# Note the use of the post method in this route
Route::post('/books', [BookController::class, 'store']);


Route::get('/', [PageController::class, 'welcome']);
Route::get('/support', [PageController::class, 'support']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/search', [BookController::class, 'search']);
Route::get('/books/{slug}', [BookController::class, 'show']);
Route::get('/list', [BookController::class, 'list']);





