<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function submitQuote(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'project_type' => 'required|string',
            'site_goal' => 'required|string',
            'site_goal_details' => 'nullable|string',
            'project_details' => 'required|string',
            'plugins' => 'nullable|string',
            'theme' => 'required|string',
            'editor' => 'required|string',
            'blocks' => 'nullable|array',
            'additional_features' => 'nullable|array',
            'pages_count' => 'required|integer',
            'content_ready' => 'required|string',
            'speed_optimization' => 'required|string',
            'security_needs' => 'nullable|string',
            'mobile_optimization' => 'required|string',
            'seo_services' => 'required|string',
            'hosting_needs' => 'required|string',
            'maintenance_services' => 'required|string',
            'budget' => 'required|string',
            'timeline' => 'required|string',
        ]);

        // Convert arrays to JSON
        $validatedData['blocks'] = json_encode($validatedData['blocks'] ?? []);
        $validatedData['additional_features'] = json_encode($validatedData['additional_features'] ?? []);

        // Enregistrer les données
        $quote = Quote::create($validatedData);

        return response()->json($quote);
    }
}
