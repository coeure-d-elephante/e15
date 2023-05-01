<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function project()
    {
        # Task belongs to Project
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Models\Project');
    }
    use HasFactory;
}
