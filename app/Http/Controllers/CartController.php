<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $formation = $request->input('formation');
        $formationId = $request->input('formation_id');
        $price = $request->input('price');

        // Ajoute l'article au panier
        $cart = session()->get('cart', []);

        // Vérifie si la formation est déjà dans le panier
        if (isset($cart[$formation])) {
            $cart[$formation]['quantity']++;
        } else {
            // Ajoute une nouvelle formation au panier
            $cart[$formation] = [
                "id" => $formationId,
                "name" => $formation,
                "price" => $price,
                "quantity" => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('services.formation')->with('success', 'Formation ajoutée au panier!');
    }

    public function viewCart()
    {
        $cart = session()->get('cart', []);

        return view('cart', compact('cart'));
    }

    public function updateQuantity(Request $request)
    {
        $formation = $request->input('formation');
        $quantity = (int) $request->input('quantity');

        $cart = session()->get('cart', []);

        if (isset($cart[$formation])) {
            $cart[$formation]['quantity'] -= $quantity;

            if ($cart[$formation]['quantity'] <= 0) {
                unset($cart[$formation]);
            }

            session()->put('cart', $cart);
        }

        return redirect()->route('cart.view')->with('success', 'Quantité mise à jour!');
    }
}