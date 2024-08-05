<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoApModel extends Model
{
    use HasFactory;

    public $table = 'task';

    protected $fillable = ['task', 'description', 'completed'];
}
