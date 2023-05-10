<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project; # Make our Task Model accessible

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
       $this->createProjectOne();
       $this->createProjectTwo();
       $this->createProjectThree();
       $this->createProjectFour();
    }

    /**
     * Run the database seeds.
     *    
     * @return void
     */

    private function createProjectOne()
    {
        $project = new Project();
        $project->category = 'academic'; 
        $project->project_title = 'Simplify';
        $project->description = 'Project Management Tool'; 
        $project->save();
    }

    private function createProjectTwo()
    {
        $project = new Project();
        $project->category = 'personal'; 
        $project->project_title = 'Google Clone';
        $project->description = 'An exact clone of Google'; 
        $project->save();
    }

    private function createProjectThree()
    {
        $project = new Project();
        $project->category = 'academic'; 
        $project->project_title = 'Mail';
        $project->description = 'An email project using python, django, and JS'; 
        $project->save();
    }

    private function createProjectFour()
    {
        $project = new Project();
        $project->category = 'personal'; 
        $project->project_title = 'Network';
        $project->description = 'A social platform like Twitter'; 
        $project->save();
    }
   
}
