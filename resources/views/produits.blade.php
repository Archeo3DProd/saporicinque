
@extends('layouts.app')
@section('title', 'Produits')
@section('content')
    @if (isset($super_categorie))
        <h2 class="text-center my-4">{{ $super_categorie->nom }}</h2>
    @endif
    @if (isset($recherche))
        <h2 class="text-center my-4">Résultat de la recherche pour "{{ $recherche }}"</h2>
    @endif
    <div class="produits-container">
        @foreach ($produits as $produit)        
            <div class="produit m-3">
                <img src="/{{ $produit->image }}" alt="{{ $produit->nom }}">
                <h2>{{ $produit->nom }}</h2>
                <p>{{ $produit->prix }} CHF</p>
                <div class="form-button-container">
                    <a href="{{ route('produit', ['slug' => $produit->slug]) }}" class="form-button button-edit mb-2">Détails</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection