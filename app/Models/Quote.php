<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'project_url',
        'project_type',
        'site_goal',
        'site_goal_details',
        'project_details',
        'plugins',
        'theme',
        'editor',
        'blocks',
        'additional_features',
        'pages_count',
        'content_ready',
        'speed_optimization',
        'security_needs',
        'mobile_optimization',
        'seo_services',
        'hosting_needs',
        'maintenance_services',
        'budget',
        'timeline',
    ];

    protected $casts = [
        'blocks' => 'array',
        'additional_features' => 'array',
    ];

}
