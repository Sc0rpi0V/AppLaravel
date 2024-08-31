<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidBic implements Rule
{
    public function passes($attribute, $value)
    {
        // Vérification simple du format BIC
        return preg_match('/^[A-Z]{4}[A-Z]{2}[A-Z2-9]{2}([A-Z0-9]{3})?$/', $value);
    }

    public function message()
    {
        return 'Le code BIC fourni n\'est pas valide.';
    }
}
