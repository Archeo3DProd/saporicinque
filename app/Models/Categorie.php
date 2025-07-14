<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'slug',
        'superCategorie_id'
    ];

    public function sous_categories(): HasMany {
        return $this->hasMany(SousCategorie::class);
    }

    public function super_categorie(): BelongsTo {
        return $this->belongsTo(SuperCategorie::class);
    }
}
