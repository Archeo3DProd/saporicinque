
@extends('layouts.app')
@section('title', 'Nos produits')
@section('content')
@if (session('success'))
    <div class="alert alert-success text-center" role="alert">
        {!! session('success') !!}
    </div>
@endif


<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" id="all-products" aria-current="page" href="{{ route('produits') }}"><h5>Tous les produits</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="new-product" href="{{ route('produit.nouveau') }}"><h5>Créer un nouveau produit</h5></a>
  </li>
</ul>


<div class="grid">
@foreach($produits as $produit)
   <div class="produit m-3">
    <img src="{{ $produit->image }}" alt="{{ $produit->nom }}">
    <h2>{{ $produit->nom }}</h2>
    <p>{{ $produit->prix }} CHF</p>
    <div class="form-button-container">
        <a href="{{ route('produit/edit', ['slug' => $produit->slug]) }}">
            <button class="form-button button-edit mb-2">Modifier</button>
            <input type="hidden" id="{{ $produit->slug }}" name="produit_slug" value="{{ $produit->slug }}">
        </a>
        <form action="/produit_delete/{{ $produit->id }}" method="GET">
            @csrf
            <button class="form-button button-delete mb-2">Supprimer</button>
            <input type="hidden" id="{{ $produit->id }}" name="{{ $produit->id }}" value="{{ $produit->id }}">
        </form>
    </div>
</div>
@endforeach
</div>
@endsection
<script src="{{ asset('js/allProductsLinkActive.module.js') }}" defer></script>