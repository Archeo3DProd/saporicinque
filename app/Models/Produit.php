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
        'prix',
        'image',
        'unite_id',
        'prix_unite',
        'emballage_id',
        'alcoolemie',
        'categorie_id',
        'marque_id',
        'quantite'
    ];

    public function unite(): BelongsTo {
        return $this->belongsTo(Unite::class);
    }

    public function emballage(): BelongsTo {
        return $this->belongsTo(Emballage::class);
    }

    public function categorie(): BelongsTo {
        return $this->belongsTo(SuperCategorie::class);
    }

    public function marque(): BelongsTo {
        return $this->belongsTo(Marque::class);
    }

    public function quantite(): BelongsTo {
        return $this->belongsTo(Quantite::class);
    }
}
