
@extends('layouts.app')
@section('title', 'Admin - Produits')
@section('content')
<h1>Produits</h1>
<a href="/admin/create">Ajouter un produit</a>
@foreach($produits as $produit)
    <div class="produit">
        <h2>{{ $produit->nom }}</h2>
        <p>{{ $produit->prix }} CHF</p>
        <a href="/admin/{{ $produit->id }}/edit">Modifier</a>
        <form action="/admin/{{ $produit->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Supprimer</button>
        </form>
    </div>
@endforeach
@endsection
