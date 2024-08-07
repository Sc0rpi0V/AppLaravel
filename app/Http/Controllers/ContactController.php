<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Affiche le formulaire de contact.
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Traite la soumission du formulaire de contact.
     */
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $contactDetails = $request->only('name', 'email', 'message');

        // Envoi de l'email (ou autre traitement nécessaire)
        Mail::send('emails.contact', $contactDetails, function($message) use ($contactDetails) {
            $message->to('valentinc.boury@gmail.com')
                    ->subject('Nouveau message de contact');
        });

        return redirect()->route('contact.index')->with('success', 'Votre message a été envoyé avec succès !');
    }
}
