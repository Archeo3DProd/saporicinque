<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $produits = Produit::all();
        $randID = rand(0, count($produits));
        if (!Produit::where('id', $randID)->exists()) {
            $randID = rand(0, count($produits));
            $produit_highlighted = Produit::where('id', $randID)->firstOrFail();
        } else {
            $produit_highlighted = Produit::where('id', $randID)->firstOrFail();
        }
        
        return view('home', ['produits' => $produits, 'produit_highlighted' => $produit_highlighted]);
    }
}
