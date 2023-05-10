<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\TasksController;

Route::get('/', [PagesController::class, 'index']);
Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/create', [TasksController::class, 'create']);
Route::post('/store', [TasksController::class, 'store']);


Route::get('/academic-projects', [TasksController::class, 'showAcademicProjects']);
Route::post('/academic-project', [TasksController::class, 'showAcademicProject']);

Route::get('/personal-projects', [TasksController::class, 'showPersonalProjects']);
Route::post('/personal-project', [TasksController::class, 'showPersonalProject']);
