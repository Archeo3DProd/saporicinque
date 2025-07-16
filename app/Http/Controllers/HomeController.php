<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $produits = Produit::all();
        $produit_highlighted = Produit::inRandomOrder()->firstOrFail();
        $super_categories = DB::table('super_categories')->orderby('id', 'ASC')->get();
        
        return view('home', ['produits' => $produits, 'produit_highlighted' => $produit_highlighted, 'super_categories' => $super_categories]);
    }
}
