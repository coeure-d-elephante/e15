<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Task;
use App\Models\Project;

class TasksController extends Controller
{
    public function index()
    {
        return view('tasks/index');
    }

    // Show form to create a new task
    public function create()
    {   
        $projects = Project::get();
        $tasks = Task::get();

        return view('tasks/create')->with([
            'projects' => $projects,
            'tasks' => $tasks
        ]);
    }

    // Process form to store the task to the databse
    public function store(Request $request)
    {
        $request->validate([
            'project_id' => 'required',
            'title' => 'required|max:225',
            'notes' => 'required|max:50',
            'status' => 'required',
        ]);

        $task = new Task;
        $task->project_id = $request->project_id;
        $task->title = $request->title;
        $task->notes = $request->notes;
        $task->status = $request->status;
        $task->save();

        return redirect('tasks/create');
    }

    // Show a dropdown with all the projects and the user can choose one to view
    public function showAcademicProjects()
    {   //show projects on the select bar

        //show all tasks on the page on each card

        $projects = Project::where('category', 'academic')->get();

        return view('/tasks/academic')->with([
            'projects' => $projects
        ]);
    }

    // Show the details (including tasks) for an individual project
    public function showAcademicProject(Request $request)
    {
        $project = Project::find($request->project_id)->with('tasks')->first();

        if (!$project) {
            return redirect('/tasks/showAcademicProjects')->with(['flash-alert' => 'Project not found.']);
        }

        return view('/tasks/showProject')->with(['project' => $project]);
    }

    public function showPersonalProjects()
    {
        $projects = Project::where('category', 'personal')->get();

        return view('/tasks/personal')->with([
            'projects' => $projects
        ]);
    }

    public function showPersonalProject(Request $request)
    {
        $project = Project::find($request->project_id)->with('tasks')->first();

        if (!$project) {
            return redirect('/tasks/showPersonalProjects')->with(['flash-alert' => 'Project not found.']);
        }

        return view('/tasks/showProject')->with(['project' => $project]);
    }


    public function editTask()
    {
        //status tinyInt legend: 0: to-do, 1: In Prog, 2: Complete
    }

    public function deleteTask()
    {
    }
}
