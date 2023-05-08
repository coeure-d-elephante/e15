<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;

use App\Models\Task;
use App\Models\Project;

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
    {   //show projects on the select bar
        $project = new Project();

        $project->title = 'Chess game';
        $project->save();


        return view('/tasks/academic')->with([
          'project' => $project
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
