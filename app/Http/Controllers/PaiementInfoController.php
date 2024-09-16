<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaiementInfo;

class PaiementInfoController extends Controller
{
    public function store(Request $request)
    {
        $paiementData = $request->validate([
            'iban' => 'required|string|max:24',
            'bic' => 'required|string|max:11',
            'bankName' => 'required|string|max:255',
            'addressBank' => 'required|string|max:255',
        ]);
    
        try {
            $paiementData['user_id'] = auth()->user()->id;
    
            PaiementInfo::create($paiementData);
    
            return response()->json([
                'success' => true,
                'iban' => $paiementData['iban'],
                'bankName' => $paiementData['bankName'],
                'bic' => $paiementData['bic'],
                'addressBank' => $paiementData['addressBank'],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }    

    public function deletePaiementInfo(Request $request)
    {
        $infoIban = $request->input('iban');

        PaiementInfo::where('iban', $infoIban)->delete();

        return response()->json(['success' => true]);
    }

    public function getPaiementInfo()
    {
        // Récupère information paiement de l'utilisateur
        $paiementInfo = PaiementInfo::where('user_id', auth()->user()->id)->first();
    
        return response()->json([
            'success' => true,
            'paiementInfo' => $paiementInfo
        ]);
    }     
}