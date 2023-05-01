<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project; # Make our Task Model accessible

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
       $this->createOneProject();
    }

    /**
     * Run the database seeds.
     *    
     * @return void
     */

    private function createOneProject()
    {
        $project = new Project();
        $project->category = 'academic'; 
        $project->project_title = 'Simplify';
        $project->description = 'Project Management Tool'; 
        $project->save();
    }

   
}
