<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'slug',
        'description',
        'image',
        'prix_prive',
        'prix_distributeur',
        'prix_gastro',
        'unite_id',
        'prix_unite',
        'emballage_id',
        'alcoolemie',
        'categorie_id',
        'sous_categorie_id',
        'fabricant_id',
        'quantite'
    ];
}
