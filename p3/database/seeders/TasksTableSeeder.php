<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use App\Models\Task; # Make our Task Model accessible
use Faker\Factory; # We’ll use this library to generate random/fake data

class TasksTableSeeder extends Seeder
{
   
    public function run()
    {
        # https://fakerphp.github.io
        $this->addTaskOne();
        $this->addTaskTwo();
        $this->addTaskThree();
        $this->addTaskFour();
        
    }

    /**
     *   
           
     */
    private function addTaskOne()
    { //Task for Simplify
        $task = new Task();
        $task->project_id = 1;
        $task->title = 'Create Models for DB'; 
        $task->notes = 'Create 4 data types for task: title, notes, status, and project_id'; 
        $task->status = 'done'; 
        $task->save();
    }

    private function addTaskTwo()
    { //Task for Google Clone Project
        $task = new Task();
        $task->project_id = 2;
        $task->title = 'Find the proper query for search functionalities'; 
        $task->notes = 'when I search on the bar, google search results should appear'; 
        $task->status = 'to-do'; 
        $task->save();
    }

    private function addTaskThree()
    { //Task for Google Clone Project
        $task = new Task();
        $task->project_id = 2;
        $task->title = 'Recreate replica of Google logo'; 
        $task->notes = 'Search CSS properties and colors needed'; 
        $task->status = 'in progress'; 
        $task->save();
    }
 
    private function addTaskFour()
    { //Task for Network Project
        $task = new Task();
        $task->project_id = 3;
        $task->title = 'Set up front end UI'; 
        $task->notes = 'Match the backend schema so front end can render data properly'; 
        $task->status = 'to-do'; 
        $task->save();
    }
    
}