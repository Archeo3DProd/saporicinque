<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Emballage;
use App\Models\Produit;
use App\Models\SuperCategorie;
use App\Models\Unite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProduitController extends Controller
{
    public function index() {
        $produits = Produit::all();
        return view('produits.index', ['produits' => $produits]);
    }

    public function produit_details(Request $request) {
        $produit = Produit::where('id', $request->produit_id)->firstOrFail();
        return view('produits.details', ['produit' => $produit]);
    }

    public function edit(Request $request) {
        $produit = Produit::where('id', $request->produit_id)->firstOrFail();
        $unites = Unite::all();
        $emballages = Emballage::all();
        $super_categories = SuperCategorie::all();
        $categories = Categorie::all();
        $unite_actuelle = Unite::where('id', $produit->unite_id)->firstOrFail();
        $emballage_actuel = Emballage::where('id', $produit->emballage_id)->firstOrFail();
        $super_categorie_actuelle = SuperCategorie::where('id', $produit->categorie_id)->firstOrFail();
        $categorie_actuelle = Categorie::where('id', $produit->categorie_id)->firstOrFail();
        return view('produits.edit', [
            'produit' => $produit, 
            'categorie_actuelle' => $categorie_actuelle, 
            'unite_actuelle' => $unite_actuelle, 
            'emballages' => $emballages, 
            'emballage_actuel' => $emballage_actuel, 
            'unites' => $unites, 
            'categories' => $categories, 
            'super_categories' => $super_categories, 
            'super_categorie_actuelle' => $super_categorie_actuelle]);
    }

    public function edit_post(Request $request) {
        $produit = Produit::where('id', $request->id)->firstOrFail();
        $produit->nom = $request->nom;
        $produit->slug = Str::slug($produit->nom);
        $produit->description = $request->description;
        $produit->image = $request->image_link;
        $produit->unite_id = $request->unite;
        $produit->emballage_id = $request->emballage;
        $produit->prix = $request->prix;
        $produit->categorie_id = $request->categorie;
        $produit->save();
        
        return back()->with('success-message', 'Les changements ont bien été effectués');
    }
}