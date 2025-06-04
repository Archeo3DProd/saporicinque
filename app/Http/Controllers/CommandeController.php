<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function afficherFormulaire()
    {
        $panier = session('panier', []);
        if (empty($panier)) return redirect('/produits')->with('error', 'Panier vide');
        return view('commande.formulaire', compact('panier'));
    }

    public function envoyer(Request $request)
    {
        $request->validate([
            'nom_client' => 'required',
            'email' => 'required|email',
            'adresse' => 'required',
        ]);

        $order = Commande::create($request->only(['nom_client', 'email', 'telephone', 'adresse', 'commentaires']));

        foreach (session('panier', []) as $id => $item) {
            $order->items()->create([
                'product_id' => $id,
                'quantite' => $item['quantite'],
                'prix_unitaire' => $item['produit']->prix
            ]);
        }

        // Tu peux ajouter ici une notification par mail au vendeur

        session()->forget('panier');
        return redirect('/')->with('success', 'Commande envoyée ! Nous vous contacterons bientôt.');
    }
}

