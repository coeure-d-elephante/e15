<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;

use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {  
      return view('tasks/index');
    }

    public function createTask()
    {
      return view('pages/create');
    }

    public function showAcademicProjects()
    {   
        $task = Task::all();

        return view('/tasks/academic')->with([
          'task' => $task
        ]);
    }

    public function showPersonalProjects()
    { 
        $task = Task::all();

      return view('/tasks/personal')->with([
           'task' => $task
      ]);
    }

    public function editTask()
    {
        //status tinyInt legend: 0: to-do, 1: In Prog, 2: Complete
    }

    public function deleteTask()
    {
        
    }
}
