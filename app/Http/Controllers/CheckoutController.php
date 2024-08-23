<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showForm()
    {
        $cart = session()->get('cart', []);
        $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));

        return view('checkout', compact('cart', 'total'));
    }

    public function handleForm(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'phone' => 'required|string|max:20',
        ]);

        // Calcul du total du panier
        $cart = session()->get('cart', []);
        $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));

        // Enregistrement des informations de la commande
        $order = Order::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'city' => $validatedData['city'],
            'postal_code' => $validatedData['postal_code'],
            'phone' => $validatedData['phone'],
            'total' => $total,
        ]);

        // Vider le panier après la commande
        session()->forget('cart');

        // Rediriger vers la page de confirmation
        return redirect()->route('checkout.complete')->with('success', 'Votre commande a été passée avec succès!');
    }

    public function orderComplete()
    {
        return view('order_complete');
    }
}