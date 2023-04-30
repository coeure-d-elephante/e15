<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TasksController;

Route::get('/', [TasksController::class, 'index']);

Route::get('/academic-projects', [TasksController::class, 'showAcademicProjects']);

Route::get('/personal-projects', [TasksController::class, 'showPersonalProjects']);
