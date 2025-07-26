
@extends('layouts.app')
@section('title', 'Nos produits')
@section('content')
<h2 class="text-center my-3">Tous les produits</h2>
<div class="grid">
    @foreach($all_produits as $produit)
        @include('layouts.components.produit-edit-card')
    @endforeach
</div>
@endsection