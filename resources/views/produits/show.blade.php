
@extends('layouts.app')
@section('title', $produit->nom)
@section('content')
<h1>{{ $produit->nom }}</h1>
<p>{{ $produit->description }}</p>
<p>{{ $produit->prix }} CHF</p>
<form action="/panier/ajouter/{{ $produit->id }}" method="POST">
    @csrf
    <button>Ajouter au panier</button>
</form>
@endsection