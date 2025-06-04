
@extends('layouts.app')
@section('title', 'Votre panier')
@section('content')
<h1>Votre panier</h1>
@forelse($panier as $id => $item)
    <p>{{ $item['produit']->nom }} - Quantité: {{ $item['quantite'] }}</p>
    <form method="POST" action="/panier/supprimer/{{ $id }}">
        @csrf
        @method('DELETE')
        <button>Retirer</button>
    </form>
@empty
    <p>Votre panier est vide.</p>
@endforelse
@if($panier)
    <a href="/commande">Passer commande</a>
@endif
@endsection