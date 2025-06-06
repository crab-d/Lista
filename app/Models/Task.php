<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'content', 'status', 'players_id'];
    
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;
}
