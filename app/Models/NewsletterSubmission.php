<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterSubmission extends Model
{
    use HasFactory;
    
    protected $fillable = ['email', 'submitted_at'];

}
