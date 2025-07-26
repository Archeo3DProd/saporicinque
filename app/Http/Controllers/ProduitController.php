<?php

namespace App\Http\Controllers;

use App\Models\Emballage;
use App\Models\Produit;
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
        $unite_actuelle = Unite::where('id', $produit->unite_id)->firstOrFail();
        $emballage_actuel = Emballage::where('id', $produit->emballage_id)->firstOrFail();
        return view('produits.edit', ['produit' => $produit, 'unite_actuelle' => $unite_actuelle, 'emballages' => $emballages, 'emballage_actuel' => $emballage_actuel, 'unites' => $unites]);
    }

    public function edit_post(Request $request) {
        $produit = Produit::where('id', $request->id)->firstOrFail();
        $produit->nom = $request->nom;
        $produit->slug = Str::slug($produit->nom);
        $produit->description = $request->description;
        $produit->image = $request->image_link;
        $produit->unite_id = $request->unite;
        $produit->emballage_id = $request->emballage;
        $produit->save();
        
        return back()->with('success-message', 'Les changements ont bien été effectués');
    }
}