<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaiementInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'iban',
        'bic',
        'bankName',
        'firstname',
        'lastname',
    ];

}
