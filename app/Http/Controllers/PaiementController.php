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

        $paiementData = $request->validate([
            'titulaire' => 'required|string|max:255',
            'nameBank' => 'required|string|max:255',
            'addressBank' => 'required|string|max:255',
            'bic' => ['required', 'string', 'max:11', new ValidBic],
            'iban' => ['required', 'string', 'max:34', new ValidIban],
        ]);

        // Calcul du total du panier
        $cart = session()->get('cart', []);
        $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));

        // Enregistrement des informations de la commande
        Paiement::create($paiementData);

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
