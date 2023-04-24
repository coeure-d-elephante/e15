<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;

use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
      return view('/tasks/index')->with([
    //   Home Landing Page with returned variables
      ]);
    }

    public function createTask()
    {
        
    }

    public function showAcademicTasks()
    {
        
    }

    public function showPersonalTasks()
    {
        
    }

    public function editTask()
    {
        //status tinyInt legend: 0: to-do, 1: In Prog, 2: Complete
    }

    public function deleteTask()
    {
        
    }
}
