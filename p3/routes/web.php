<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\TasksController;


Route::get('/', [PagesController::class, 'index']);

// Route::get('/login', [PagesController::class, 'login']);
// Route::get('/register', [PagesController::class, 'register']);
Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/academic-projects', [TasksController::class, 'showAcademicProjects']);

Route::get('/personal-projects', [TasksController::class, 'showPersonalProjects']);
