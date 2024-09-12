<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaiementInfo;

class PaiementInfoController extends Controller
{
    public function store(Request $request) 
    {
        $paiementData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'iban' => 'required|string|max:24',
            'bic' => 'required|string|max:11',
            'bankName' => 'required|string|max:255',
        ]);

        try {
            PaiementInfo::create($paiementData);

            return response()->json([
                'success' => true,
                'firstname' => $paiementData['firstname'],
                'lastname' => $paiementData['lastname'],
                'iban' => $paiementData['iban'],
                'bankName' => $paiementData['bankName'],
                'bic' => $paiementData['bic'],
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

    public function getPaiementInfo() {
        $paiementInfo = PaiementInfo::first(); 
    
        return response()->json([
            'success' => true,
            'paiementInfo' => $paiementInfo
        ]);
    }   
}