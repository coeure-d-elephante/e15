<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function tasks()
    {
        # Project has many Tasks
        # Define a one-to-many relationship.
        return $this->hasMany('App\Models\Task');
    }

    use HasFactory;
}
