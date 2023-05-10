



# Project 3
+ By: Steph Javier
+ URL: <http://e15p3.ssjavier.world>

## Outside resources
*your list of outside resources go here*
+ https://stackoverflow.com/questions/8357058/how-to-make-an-html-anchor-tag-or-link-look-like-a-button
+ https://hesweb.dev/e15/notes/laravel/forms-get
+ https://hesweb.dev/e15/notes/laravel/forms-post
+ CSS format from bookmark project and cross references from Bookmark Project
+ https://laravel.com/docs/10.x/eloquent-relationships & Laravel Docs

## Notes for instructor

```php
<?php
$message = "First of all, THANK YOU so very much for your help Susan. Although I came around rather slow, I learnt a GREAT deal and have regained a profound appreciation for programming and web development. I found myself overwhelmed so many times with so much information these past couple of months; but now I'm realising that that is the fun part of programming. Learn to have fun not knowing and figuring it out. 

Through this class I was able to see where my strengths and weaknesses lie in programming. I have fun and I am great with putting together the front-end/UI, but I do so-so at figuring out the middle-tier and back-end, for now. This because I have less experience with these two levels. However, I've come to enjoy figuring out how to piece everything together. So I am looking forward to fortifying my skills in middle and back-end programming as I go forward in my career and in school.

This class and another (CS-33: Python, Django, JS) came as a challenge. After all, this was my first proper semester pivoting to a concentration in Computer Science for my BLA Degree at HES. I had informal experience in programming through a introductory course in CS before and a coding bootcamp. But the building blocks that I have learnt (and will continue to do so) through this course are absolutely valuable especially as a beginner. So again, thank you kindly."

echo $message;
?>
```

Onto the project: 
    This project was originally designed so that only I can have access to creating the database (adding tasks). I forgot to take in account the jill@harvard.edu and jamal@harvard.edu. So let's just say that they are part of the team of my admin users. 

    Upon login:
        User should be able to: Create Task
        if User !authorised: 
            Just view projects and tasks

    On landing page: 
        Category
        Academic || Personal 
            foreach $project
                $tasks
                    foreach $tasks as $task

                        title
                        notes


    Some unfinished parts:
        + Store Task:   
            value of 'status' wasn't implemented correctly and thus not submitting succesfully
        + CSS: I've managed to put all the style="color: white" and there's a bit of lag in the CSS. 
            The task cards aren't empty, the forms are just in white
        + Tasks: I've created multiple tasks, however because of the query I have made it only renders one task because of the first() method
        line 87: from TasksController.php
          $project = Project::find($request->project_id)->with('tasks')->first();

    Those are the main bugs. I've ommitted the edit and delete funcitonalities for now. 

    