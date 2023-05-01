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
        $this->addOneTask();
        
    }

    /**
     *   
           
     */
    private function addOneTask()
    {
        $task = new Task();
        $task->project_id = 1;
        $task->title = 'Create Models for DB'; //00: Academic; 01: Personal;
        $task->notes = 'Simplify asdfdsfadsfadsfdsfadsfadsf'; 
        $task->status = 'done'; //00: Academic; 01: Personal;
        $task->save();
    }

 
    
}