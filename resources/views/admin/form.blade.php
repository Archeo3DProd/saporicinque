
@extends('layouts.app')
@section('title', isset($produit) ? 'Modifier le produit' : 'Nouveau produit')
@section('content')
<h1>{{ isset($produit) ? 'Modifier' : 'Créer' }} un produit</h1>
<form method="POST" action="{{ isset($produit) ? url('/admin/' . $produit->id) : url('/admin') }}">
    @csrf
    @if(isset($produit)) @method('PUT') @endif

    <label>Nom :</label>
    <input type="text" name="nom" value="{{ $produit->nom ?? '' }}" required>

    <label>Slug :</label>
    <input type="text" name="slug" value="{{ $produit->slug ?? '' }}" required>

    <label>Description :</label>
    <textarea name="description">{{ $produit->description ?? '' }}</textarea>

    <label>Prix :</label>
    <input type="number" step="0.01" name="prix" value="{{ $produit->prix ?? '' }}" required>

    <label>Image (URL ou chemin) :</label>
    <input type="text" name="image" value="{{ $produit->image ?? '' }}">

    <button>Enregistrer</button>
</form>
@endsection