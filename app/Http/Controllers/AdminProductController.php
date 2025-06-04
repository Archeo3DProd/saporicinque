<?php
namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        return view('admin.index', compact('produits'));
    }

    public function create()
    {
        return view('admin.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'slug' => 'required|unique:products,slug',
            'prix' => 'required|numeric',
        ]);

        Produit::create($request->all());
        return redirect('/admin')->with('success', 'Produit créé.');
    }

    public function edit(Produit $product)
    {
        return view('admin.form', ['produit' => $product]);
    }

    public function update(Request $request, Produit $product)
    {
        $request->validate([
            'nom' => 'required',
            'slug' => 'required|unique:products,slug,' . $product->id,
            'prix' => 'required|numeric',
        ]);

        $product->update($request->all());
        return redirect('/admin')->with('success', 'Produit mis à jour.');
    }

    public function destroy(Produit $product)
    {
        $product->delete();
        return redirect('/admin')->with('success', 'Produit supprimé.');
    }
}
