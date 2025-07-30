
@extends('layouts.app')
@section('title', 'Produits')
@section('content')
    <div class="produits-container">      
        <div class="produit-details m-3">
            <img class="mt-5" src="/{{ $produit->image }}" alt="{{ $produit->nom }}">
            <h2 class="text-center mt-3">{{ $produit->nom }}</h2>
            <h4 class="text-center">{{ $produit->quantite }} {{ $unite->nom }}{{ $produit->quantite > 1 ? 's' : '' }}</h4>
            @if (isset($produit->alcoolemie) && $produit->alcoolemie > 0)
                <h4 class="text-center">Taux : {{ $produit->alcoolemie }}°</h4>
            @endif
            <h4 class="text-center mb-0">Chf {{ $produit->prix }}</h4>
            <p class="my-3">{{ $produit->description }}</p>
            <p class="mb-3">Fabricant : {{ $marque->nom }}</p>
            <div class="button-container my-5">
                <a class="button-commander" href="{{ url()->previous() }}">< Retour</a>
                <a href="{{ route('produit', ['slug' => $produit->slug]) }}" class="button-commander mb-2">Commander</a>
            </div>
        </div>
    </div>    
@endsection
