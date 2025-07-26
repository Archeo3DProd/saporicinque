
@extends('layouts.app')
@section('title', 'Nos produits')
@section('content')
<h2 class="text-center mt-2">{{ $produit->nom }}</h2>
    @if (session('success-message'))
        <div class="alert alert-success text-center" role="alert">
            {!! session('success-message') !!}
        </div>
    @endif
<form class="edit-produit-form" action="{{ route('produit.edit') }}" method="post">
<hr class="divider my-2">
    @csrf
    <input type="hidden" id="id" name="id" value="{{ $produit->id }}">
    <div class="edit-form-section">
        <label class="mb-3" for="nom">Nom actuel : {{ $produit->nom }}</label>
        <input type="text" id="nom" name="nom" value="{{ $produit->nom }}">
    </div>
    <hr class="divider my-2">
    <div class="edit-form-section">
        <label class="mb-3" for="description">Description : </label>
        <textarea id="description" name="description" rows="10" cols="50">{{ $produit->description }}</textarea>
    </div>
    <hr class="divider my-2">
    <div class="edit-form-section">
        <label class="mb-3" for="image">Image : </label>
        <img src="../../{{ $produit->image }}" alt="{{ $produit->nom }}">
        <input type="hidden" name="image_link" id="image_link" value="{{ $produit->image }}">
        <input class="mt-5" type="file" id="image" name="image" accept="image/png, image/jpeg">
    </div>
    <hr class="divider my-2">
    <div class="edit-form-section">
        <label class="mb-3" for="prix">Prix actuel : {{ $produit->prix }}</label>
        <input type="number" id="prix" name="prix" value="{{ $produit->prix }}">
    </div>
    <hr class="divider my-2">
    <div class="edit-form-section">
        <label class="mb-3" for="unite">Unité actuelle : {{ $unite_actuelle->nom }}</label>
        <select name="unite" id="unite">
            @foreach ($unites as $unite)
                <option value="{{ $unite->id }}" {{ $unite_actuelle->id == $unite->id ? 'selected=true' : '' }}>{{ $unite->nom }}</option>
            @endforeach
        </select>
    </div>
    <hr class="divider my-2">
    <div class="edit-form-section">
        <label class="mb-3" for="emballage">Emballage actuel : {{ $emballage_actuel->nom }}</label>
        <select name="emballage" id="emballage">
            @foreach ($emballages as $emballage)
                <option value="{{ $emballage->id }}" {{ $emballage_actuel->id == $emballage->id ? 'selected=true' : '' }}>{{ $emballage->nom }}</option>
            @endforeach
        </select>
    </div>
    <hr class="divider my-2">
    <button class="edit-submit-btn my-5" type="submit">Confirmer ces données</button>
</form>

@endsection