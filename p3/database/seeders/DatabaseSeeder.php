<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(ProjectsTableSeeder::class);
       $this->call(TasksTableSeeder::class);
       $this->call(UsersTableSeeder::class);
    }
}
