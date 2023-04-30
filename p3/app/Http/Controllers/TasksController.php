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
        return view('/tasks/academic')->with([
          //show all tasks with academic category
        ]);
    }

    public function showPersonalProjects()
    {
      return view('/tasks/personal')->with([
           //show all tasks with personal category
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
