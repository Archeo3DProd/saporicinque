<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function ajouter(Request $request, Produit $product)
    {
        $panier = session()->get('panier', []);
        $id = $product->id;

        $panier[$id] = [
            'produit' => $product,
            'quantite' => ($panier[$id]['quantite'] ?? 0) + 1
        ];

        session()->put('panier', $panier);
        return back()->with('success', 'Produit ajouté au panier.');
    }

    public function afficher()
    {
        $panier = session()->get('panier', []);
        return view('panier.index', compact('panier'));
    }

    public function supprimer($id)
    {
        $panier = session()->get('panier', []);
        unset($panier[$id]);
        session()->put('panier', $panier);
        return back();
    }
}

