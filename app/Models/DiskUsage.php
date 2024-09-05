<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiskUsage extends Model
{
    use HasFactory;

    protected $fillable = ['total_space', 'free_space', 'memory_usage', 'directory_size'];

}
