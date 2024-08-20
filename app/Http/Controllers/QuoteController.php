<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use Barryvdh\DomPDF\Facade\Pdf;

class QuoteController extends Controller
{
    public function submitQuote(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'project_name' => 'required|string',
            'project_url' => 'required|string',
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

        // Calculer le coût total
        $totalCost = 0;

        // Coût de base pour la création/mise à jour du site
        $totalCost += (float) $quote->budget;

        // Ajoute le coût pour l'optimisation de la vitesse si nécessaire
        if ($quote->speed_optimization == 'yes') {
            $totalCost += 500;
        }

        // Ajoute le coût pour la sécurité supplémentaire si nécessaire
        if (!empty($quote->security_needs)) {
            $totalCost += 200;
        }

        // Ajoute le coût pour l'optimisation mobile si nécessaire
        if ($quote->mobile_optimization == 'yes') {
            $totalCost += 300;
        }

        // Assigner le total calculé au modèle
        $quote->totalCost = $totalCost;

        // Générer le PDF
        $pdf = Pdf::loadView('quotepdf', compact('quote'));

        // Sauvegarder le PDF sur le serveur (optionnel)
        $path = storage_path('app/public/devis_' . $quote->id . '.pdf');
        $pdf->save($path);

        // Retourner le PDF directement comme réponse HTTP pour téléchargement
        return $pdf->download('devis_' . $quote->project_name . '.pdf');
    }
}
