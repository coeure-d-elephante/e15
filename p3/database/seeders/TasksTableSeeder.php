<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use App\Models\Task; # Make our Task Model accessible
use Faker\Factory; # We’ll use this library to generate random/fake data

class TasksTableSeeder extends Seeder
{
    private $faker;

    /**
     * This run method is the first method you should have in all your Seeder class files
     * This method will be invoked when we invoke this seeder
     * In this method you should put code that will cause data to be entered into your tables
     * (in this case, that's the `books` table)
     */
    public function run()
    {
        # https://fakerphp.github.io
        $this->faker = Factory::create();
        
    }

    /**
     *
     */
    private function addOneBook()
    {
        $task = new Task();
        $task->created_at = $this->faker->dateTime();
        $task->updated_at = $task->created_at;
        $task->category = '00'; //00: Academic; 01: Personal;
        $task->project_title = 'Simplify'; 
        $task->project_description = 'Project Management Tool'; //00: Academic; 01: Personal;
        $task->title = 'Routers→Web.php ';
        $task->notes = 'Pass data from Models to Controllers';
        $task->status = '0'; //0: todo, 1: in prog, 2: completed
        $task->save();
    }

    /**
     *
     */
    // private function addAllTasksFromTasksDotJsonFile()
    // {
    //     $bookData = file_get_contents(database_path('books.json'));
    //     $books = json_decode($bookData, true);

    //     foreach ($books as $slug => $bookData) {
    //         $book = new Book();

    //         $book->created_at = $this->faker->dateTimeThisMonth();
    //         $book->updated_at = $book->created_at;
    //         $book->slug = $slug;
    //         $book->title = $bookData['title'];
    //         $book->author = $bookData['author'];
    //         $book->published_year = $bookData['published_year'];
    //         $book->cover_url = $bookData['cover_url'];
    //         $book->info_url = $bookData['info_url'];
    //         $book->purchase_url = $bookData['purchase_url'];
    //         $book->description = $bookData['description'];

    //         $book->save();
    //     }
    // }

    /**
     *  
     */
    private function addRandomlyGeneratedTasksUsingFaker()
    {
        for ($i = 0; $i < 100; $i++) {
            $task = new Task();
            
            $title = $this->faker->words(rand(3, 6), true);
            $task->created_at =  $this->faker->datetime();
            $task->updated_at =  $task->created_at;
            $task->category = Str::random(10);
            $task->project_title = Str::random(10);
            $task->project_description = Str::random(10);
            $task->title = Str::random(10);
            $task->notes = Str::random(10);
            $task->status = Str::random(10);
            $task->description = $this->faker->paragraphs(1, true);

            $task->save();
        }
    }
}