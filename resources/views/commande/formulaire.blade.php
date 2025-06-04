
@extends('layouts.app')
@section('title', 'Passer commande')
@section('content')
<h1>Coordonnées</h1>
<form method="POST" action="/commande">
    @csrf
    <label>Nom :</label>
    <input type="text" name="nom_client" required>

    <label>Email :</label>
    <input type="email" name="email" required>

    <label>Téléphone :</label>
    <input type="text" name="telephone">

    <label>Adresse :</label>
    <textarea name="adresse" required></textarea>

    <label>Commentaires :</label>
    <textarea name="commentaires"></textarea>

    <button>Envoyer la commande</button>
</form>
@endsection
