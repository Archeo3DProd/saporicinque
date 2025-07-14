<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'nom',
        'slug',
        'description',
        'prix',
        'image',
        'unite',
        'prix_unite',
        'emballage',
        'alcoolemie',
        'categorie',
        'sous_categorie'
    ];
}
