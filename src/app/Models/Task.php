<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Summary of Task
 */
class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}