<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomClient',
        'prenomClient',
        'sexeClient',
        'etatCivileClient',
        'adresseClient',
        'raisonSocialClient',
        'formeJuridiqueClient',
        'siegeSocialeClient',
        'nationaliteClient',
        'professionClient',
        'repreneurLegalClient',
        'numeroClient',
        'telephoneClient',
        'emailClient',
        'photoClient',
        'numeroRC5Client',
        'dateJuridictionClient',
        'dateDeroulementProcedureClient',
    ];
}
