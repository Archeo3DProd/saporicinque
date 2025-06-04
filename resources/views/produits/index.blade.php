
@extends('layouts.app')
@section('title', 'Nos produits')
@section('content')
<h1>Nos produits</h1>
<div class="grid">
@foreach($produits as $produit)
    <div class="produit">
        <img src="{{ $produit->image }}" alt="{{ $produit->nom }}">
        <h2>{{ $produit->nom }}</h2>
        <p>{{ $produit->prix }} CHF</p>
        <form action="/panier/ajouter/{{ $produit->id }}" method="POST">
            @csrf
            <button>Ajouter au panier</button>
        </form>
    </div>
@endforeach
</div>
@endsection