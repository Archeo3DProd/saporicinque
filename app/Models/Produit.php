<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Produit extends Model
{
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

    public function unite(): BelongsTo {
        return $this->belongsTo(Unite::class);
    }

    public function emballage(): BelongsTo {
        return $this->belongsTo(Emballage::class);
    }

    public function fabricant(): BelongsTo {
        return $this->belongsTo(Fabricant::class);
    }

    public function quantite(): BelongsTo {
        return $this->belongsTo(Quantite::class);
    }
}
