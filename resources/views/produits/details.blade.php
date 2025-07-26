@extends('layouts.app')
@section('title', 'Nos produits')
@section('content')
<div class="produit-details">
    <h3>{{ $produit->nom }}</h3>
    <p>{{ $produit->description }}</p>
    <p>{{ $produit->prix }} CHF</p>
</div>
@endsection