<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidIban implements Rule
{
    public function passes($attribute, $value)
    {
        // Vérification simple du format IBAN
        $iban = strtoupper($value);
        $iban = str_replace(' ', '', $iban);

        // Vérifie que l'IBAN commence par deux lettres et est suivi de chiffres
        return preg_match('/^[A-Z]{2}\d{2}[A-Z0-9]{1,30}$/', $iban);
    }

    public function message()
    {
        return 'Le numéro IBAN fourni n\'est pas valide.';
    }
}
