<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Mod0el;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Player extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password', 'status'];
    
    /** @use HasFactory<\Database\Factories\PlayerFactory> */
    use HasFactory;
}
