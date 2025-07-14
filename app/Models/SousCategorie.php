<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SousCategorie extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'slug',
        'superCategorie_id'
    ];

    public function categories(): HasMany {
        return $this->hasMany(Categorie::class);
    }

    public function super_categories(): BelongsTo {
        return $this->belongsTo(SuperCategorie::class);
    }
}
