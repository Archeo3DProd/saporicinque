<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'nom_client',
        'email',
        'telephone',
        'adresse',
        'commentaires',
        'statut'];

    public function items() {
        return $this->hasMany(OrderItem::class);
    }
}
