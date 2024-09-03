<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulaire',
        'nameBank',
        'addressBank',
        'bic',
        'iban',
        'card_number',
        'card_holder',
        'expiry_date',
        'cvc',
    ];

    public static function createPaiement(array $data)
    {
        if (isset($data['payment_method'])) {
            if ($data['payment_method'] === 'rib') {
                return self::create([
                    'titulaire' => $data['titulaire'],
                    'nameBank' => $data['nameBank'],
                    'addressBank' => $data['addressBank'],
                    'bic' => $data['bic'],
                    'iban' => $data['iban'],
                ]);
            } else if ($data['payment_method'] === 'card') {
                return self::create([
                    'card_number' => $data['card_number'],
                    'card_holder' => $data['card_holder'],
                    'expiry_date' => $data['expiry_date'],
                    'cvc' => $data['cvc'],
                ]);
            }
        }

        throw new \InvalidArgumentException("Invalid payment method.");
    }
}
