<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Speficie chanp remplissable
    protected $fillable = [
        'title',
        'slug',
        'content'
    ];

    // Specification champ non remplissable
    protected $guarded = [];
}
