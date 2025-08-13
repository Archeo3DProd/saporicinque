<?php

namespace App\Http\Controllers;

use App\Models\Fabricant;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\Unite;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function accueil() {
        $produits = Produit::orderBy('id', 'ASC')->get();
        $produit_highlighted = Produit::inRandomOrder()->firstOrFail();
        $latest_produit = Produit::latest()->firstOrFail();
        $categories = DB::table('categories')->orderby('id', 'ASC')->get();
        
        return view('home', ['produits' => $produits, 'latest_produit' => $latest_produit, 'produit_highlighted' => $produit_highlighted, 'categories' => $categories]);
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
        $categorie = Categorie::where('slug', $request->route('categorie'))->firstOrFail();
        $produits = Produit::where('categorie_id', $categorie->id)->get();
        return view('produits', ['produits' => $produits, 'categorie' => $categorie]);
    }

    public function produit(Request $request) {
        $produit = Produit::where('slug', $request->route('slug'))->firstOrFail();
        $fabricant = Fabricant::where('id', $produit->fabricant_id)->firstOrFail();
        $unite = Unite::where('id', $produit->unite_id)->firstOrFail();
        return view('produit', ['produit' => $produit, 'fabricant' => $fabricant, 'unite' => $unite]);
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
