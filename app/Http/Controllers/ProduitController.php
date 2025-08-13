<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Emballage;
use App\Models\Fabricant;
use App\Models\Produit;
use App\Models\SousCategorie;
use App\Models\Unite;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Type\Decimal;

class ProduitController extends Controller
{
    public function index() {
        $produits = Produit::orderBy('id', 'ASC')->get();
        return view('produits.index', ['produits' => $produits])->with('success', 'Le produit a bien été modifié');
    }

    public function produit_details(Request $request) {
        $produit = Produit::where('id', $request->produit_id)->firstOrFail();
        return view('produits.details', ['produit' => $produit]);
    }

    public function edit(Request $request) {
        $produit = Produit::where('slug', $request->slug)->firstOrFail();
        $unites = Unite::orderBy('nom', 'ASC')->get();
        $quantite_actuelle = $produit->quantite;
        $emballages = Emballage::orderBy('nom', 'ASC')->get();
        $sous_categories = SousCategorie::orderBy('nom', 'ASC')->get();
        $categories = Categorie::orderBy('nom', 'ASC')->get();
        $unite_actuelle = Unite::where('id', $produit->unite_id)->firstOrFail();
        $emballage_actuel = Emballage::where('id', $produit->emballage_id)->firstOrFail();
        $sous_categorie_actuelle = SousCategorie::where('id', $produit->sous_categorie_id)->firstOrFail();
        $categorie_actuelle = Categorie::where('id', $produit->categorie_id)->firstOrFail();
        return view('produits.edit', [
            'produit' => $produit, 
            'categorie_actuelle' => $categorie_actuelle, 
            'unite_actuelle' => $unite_actuelle, 
            'emballages' => $emballages, 
            'emballage_actuel' => $emballage_actuel, 
            'unites' => $unites, 
            'categories' => $categories, 
            'sous_categories' => $sous_categories, 
            'categorie_actuelle' => $categorie_actuelle,
            'sous_categorie_actuelle' => $sous_categorie_actuelle,
            'quantite_actuelle' => $quantite_actuelle
        ]);
    }

    public function edit_post(Request $request) {
        $produit = Produit::where('id', $request->id)->firstOrFail();
        $produit->nom = $request->nom;
        $produit->slug = Str::slug($produit->nom);
        $produit->description = $request->description;
        $produit->image = $request->image_link;
        $produit->unite_id = intval($request->unite);
        $produit->emballage_id = intval($request->emballage);
        $produit->prix_prive = floatval($request->prixPrive);
        $produit->prix_distributeur = floatval($request->prixDistributeur);
        $produit->prix_gastro = $request->prixGastro;
        $produit->categorie_id = intval($request->categorie);
        $produit->sous_categorie_id = intval($request->sous_categorie);
        $produit->quantite = floatval($request->quantite);
        $produit->save();
        
        $unite_actuelle = Unite::where('id', $produit->unite_id)->firstOrFail();
        $emballage_actuel = Emballage::where('id', $produit->emballage_id)->firstOrFail();
        $sous_categorie_actuelle = SousCategorie::where('id', $produit->sous_categorie_id)->firstOrFail();
        $categorie_actuelle = Categorie::where('id', $produit->categorie_id)->firstOrFail();
        $quantite_actuelle = $produit->quantite;
        $unites = Unite::all();
        $emballages = Emballage::all();
        $sous_categories = SousCategorie::all();
        $categories = Categorie::all();
        
        return redirect('produits')->with('success', 'Le produit a bien été modifié');
    }

    public function nouveau() {
        $produits = Produit::orderBy('id', 'ASC')->get();
        $emballages = Emballage::orderBy('nom', 'ASC')->get();
        $categories = Categorie::orderBy('nom', 'ASC')->get();
        $sous_categories = SousCategorie::orderBy('nom', 'ASC')->get();
        $fabricants = Fabricant::orderBy('nom', 'ASC')->get();
        return view('produits.nouveau', [
            'produits' => $produits,
            'emballages' => $emballages,
            'categories' => $categories,
            'sous_categories' => $sous_categories,
            'fabricants' => $fabricants])->with('success', 'Le produit a bien été modifié');
    }

    public function nouveau_post(Request $request): RedirectResponse {
        
        $validator = Validator::make($request->all(), [
            'nom' => 'required|unique:produits|max:255',
            'picture' => 'required|image|mimes:jpeg,png,jpg',
            'categorie_id' => 'required',
            'sous_categorie_id' => 'required',
            'prixPrive' => 'required',
            'prixDistributeur' => 'required',
            'prixGastro' => 'required',
            'emballage_id' => 'required',
            'fabricant_id' => 'required',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        
        if($request->has('picture')){
            dd($request->file('picture'));
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'images/';
            dd($path . $filename);
            $file->move($path, $filename);
        }

/*
        dump((doubleval($request->prixPrive)));
        dump($request->all());
        dd($validator);
*/
        $validated = $validator->validated();
        if($validated) {
            Produit::create([
            'nom' => $request->nom,
            'slug' => Str::slug($request->nom),
            'description' => $request->description,
            'image' => 'images/' . $request->picture,
            'prix_prive' => doubleval($request->prixPrive),
            'prix_distributeur' => floatval($request->prixDistributeur),
            'prix_gastro' => floatval($request->prixGastro),
            'emballage_id' => intval($request->prixGastro_id),
            'categorie_id' => intval($request->categorie_id),
            'sous_categorie_id' => intval($request->sous_categorie_id),
            'fabricant_id' => intval($request->fabricant_id)
        ]);

        }

        return redirect()->back()->withInput()->withErrors($validator, 'produit');

    }
}