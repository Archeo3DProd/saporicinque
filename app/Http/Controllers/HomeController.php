<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use App\Models\SuperCategorie;
use App\Models\Produit;
use App\Models\Unite;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function accueil() {
        $produits = Produit::all();
        $produit_highlighted = Produit::inRandomOrder()->firstOrFail();
        $super_categories = DB::table('super_categories')->orderby('id', 'ASC')->get();
        
        return view('home', ['produits' => $produits, 'produit_highlighted' => $produit_highlighted, 'super_categories' => $super_categories]);
    }

    public function contact() {
        return view('contact');
    }

    public function aPropos() {
        return view('aPropos');
    }

    public function liens() {
        return view('liens');
    }

    public function recettes() {
        return view('recettes');
    }


    public function tous_les_produits(Request $request) {
        $produits = Produit::all();
        return view('produits', ['produits' => $produits]);
    }

    public function produits(Request $request) {
        $super_categorie = SuperCategorie::where('slug', $request->route('categorie'))->firstOrFail();
        $produits = Produit::where('categorie_id', $super_categorie->id)->get();
        return view('produits', ['produits' => $produits, 'super_categorie' => $super_categorie]);
    }

    public function produit(Request $request) {
        $produit = Produit::where('slug', $request->route('slug'))->firstOrFail();
        $marque = Marque::where('id', $produit->marque_id)->firstOrFail();
        $unite = Unite::where('id', $produit->unite_id)->firstOrFail();
        return view('produit', ['produit' => $produit, 'marque' => $marque, 'unite' => $unite]);
    }

    public function recherche(Request $request) {
        $recherche = $request->recherche;
        $produits = Produit::where('nom', 'like', "%{$recherche}%")
                ->orWhere('description', 'like', "%{$recherche}%")
                ->orWhere('image', 'like', "%{$recherche}%")
                ->orWhere('alcoolemie', 'like', "%{$recherche}%")
                ->get();
            
        return view('produits', ['produits' => $produits, 'recherche' => $recherche]);
    }
}
