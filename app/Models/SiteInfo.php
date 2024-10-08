<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'siteName',
        'siteDescription',
        'siteUrlName',
        'siteListPlugins',
        'siteType',
        'siteTheme',
        'siteEditor',
    ];
}
