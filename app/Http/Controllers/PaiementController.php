<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use Illuminate\Http\Request;
use App\Rules\ValidIban;
use App\Rules\ValidBic;

class PaiementController extends Controller
{
    public function showForm()
    {
        $cart = session()->get('cart', []);
        $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));

        return view('paiement', compact('cart', 'total'));
    }

    public function handleFormPaiement(Request $request) {

        $validatedData = $request->validate([
            'payment_method' => 'required|string|in:rib,card',
        ]);

        $paiementData = [];
    
        if ($validatedData['payment_method'] === 'rib') {
            $paiementData = $request->validate([
                'titulaire' => 'required|string|max:255',
                'nameBank' => 'required|string|max:255',
                'addressBank' => 'required|string|max:255',
                'bic' => ['required', 'string', 'max:11', new ValidBic],
                'iban' => ['required', 'string', 'max:34', new ValidIban],
            ]);
        } else if ($validatedData['payment_method'] === 'card') {
            $paiementData = $request->validate([
                'card_number' => 'required|string|size:16',
                'card_holder' => 'required|string|max:255',
                'expiry_date' => 'required|string|size:5',
                'cvc' => 'required|string|size:3',
            ]);
        }
    
        // Calcul du total du panier
        $cart = session()->get('cart', []);
        $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
    
        $paiementData['payment_method'] = $validatedData['payment_method'];

        // Enregistrement des informations de la commande
        Paiement::createPaiement($paiementData);
    
        // Vide le panier après la commande
        session()->forget('cart');
    
        // Redirige vers la page de confirmation
        return redirect()->route('checkout.complete')->with('success', 'Votre commande a été passée avec succès!');
    }    

    public function orderComplete()
    {
        return view('order_complete');
    }
}
