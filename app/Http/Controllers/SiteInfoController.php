<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteInfo;

class SiteInfoController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'siteName' => 'required|string|max:255',
            'siteDescription' => 'required|string|max:1000',
            'siteUrlName' => 'required|string|max:1000',
            'siteListPlugins' => 'required|string|max:1000',
            'siteType' => 'required|string|max:255',
            'siteTheme' => 'required|string|max:255',
            'siteEditor' => 'required|string|max:255',
        ]);

        // Sauvegarde les données dans la base de données 
        SiteInfo::create($validatedData);

        return response()->json([
            'success' => true,
            'siteName' => $validatedData['siteName'],
            'siteDescription' => $validatedData['siteDescription'],
            'siteUrlName' => $validatedData['siteUrlName'],
            'siteListPlugins' => $validatedData['siteListPlugins'],
            'siteType' => $validatedData['siteType'],
            'siteTheme' => $validatedData['siteTheme'],
            'siteEditor' => $validatedData['siteEditor'],
        ]);
    }
}