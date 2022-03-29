<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plaintes extends Model
{
    use HasFactory;

    protected $fillable = [
        'naturePlainte',
        'datePlainte',
        'descriptionsPlainte',
        'clients_id',
    ];

}
