
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

@if ($errors->any())
    <div class="alert alert-danger mt-4 text-center">
        Il y a des erreurs dans le formulaire. Merci de vérifier.
    </div>
@endif

<form class="edit-produit-form mt-5" action="{{ route('produit/nouveau') }}" method="POST">
  @csrf
  <div class="edit-form-section">    
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom">
    @if ($errors->has('nom'))
        <div class="alert alert-danger mt-4">
            {{ $errors->first('nom') }}
        </div>
    @endif
  </div>
    <hr class="divider my-2">
    <div class="edit-form-section">
        <label class="mb-3" for="picture">Image : </label>
        <img src="#" alt="Aucune image sélectionnée pour le moment" id="image" style="width: 30%;  margin-top: 20px;">
        <input class="mt-5" type="file" id="picture" name="picture" value="" onchange="previewPicture(this)" accept="image/png, image/jpeg">
    @if ($errors->has('image'))
        <div class="alert alert-danger mt-4">
            {{ $errors->first('image') }}
        </div>
    @endif
    </div>
  <hr class="divider my-2">
  <div class="edit-form-section">    
    <label for="description">Description :</label>    
    <textarea id="description" name="description" rows="10" cols="50"></textarea>
  </div>
  <hr class="divider my-2">
  <div class="edit-form-section">
      <label class="mb-3" for="prixPrive">Prix Privé : </label>
      <input type="text" id="prixPrive" name="prixPrive"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
      @if ($errors->has('prixPrive'))
          <div class="alert alert-danger mt-4">
              {{ $errors->first('prixPrive') }}
          </div>
      @endif
  </div>
  <hr class="divider my-2">
  <div class="edit-form-section">
      <label class="mb-3" for="prixDistributeur">Prix Distributeur : </label>
      <input type="text" id="prixDistributeur" name="prixDistributeur"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
      @if ($errors->has('prixDistributeur'))
          <div class="alert alert-danger mt-4">
              {{ $errors->first('prixDistributeur') }}
          </div>
      @endif
  </div>
  <hr class="divider my-2">
  <div class="edit-form-section">
      <label class="mb-3" for="prixGastro">Prix Gastro : </label>
      <input type="text" id="prixGastro" name="prixGastro"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
      @if ($errors->has('prixGastro'))
          <div class="alert alert-danger mt-4">
              {{ $errors->first('prixGastro') }}
          </div>
      @endif
  </div>
    <hr class="divider my-2">
    <div class="edit-form-section">
        <label class="mb-3" for="emballage_id">Emballage : </label>
        <select name="emballage_id" id="emballage_id">
            <option></option>
            @foreach ($emballages as $emballage)
                <option value="{{ $emballage->id }}">{{ $emballage->nom }}</option>
            @endforeach
        </select>
        @if ($errors->has('emballage_id'))
          <div class="alert alert-danger mt-4">
              {{ $errors->first('emballage_id') }}
          </div>
      @endif
    </div>
    <hr class="divider my-2">
    <div class="edit-form-section">
        <label class="mb-3" for="categorie_id">Catégorie :</label>
        <select name="categorie_id" id="categorie_id">
            <option></option>
            @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
            @endforeach
        </select>
      @if ($errors->has('categorie_id'))
          <div class="alert alert-danger mt-4">
              {{ $errors->first('categorie_id') }}
          </div>
      @endif
    </div>
    <hr class="divider my-2">
    <div class="edit-form-section">
        <label class="mb-3" for="sous_categorie_id">Sous-catégorie :</label>
        <select name="sous_categorie_id" id="sous_categorie_id">
            <option></option>
            @foreach ($sous_categories as $sous_categorie)
                <option value="{{ $sous_categorie->id }}">{{ $sous_categorie->nom }}</option>
            @endforeach
        </select>
        @if ($errors->has('sous_categorie_id'))
            <div class="alert alert-danger mt-4">
                {{ $errors->first('sous_categorie_id') }}
            </div>
        @endif
    </div>
    <hr class="divider my-2">
    <div class="edit-form-section">
        <label class="mb-3" for="fabricant_id">Fabricant :</label>
        <select name="fabricant_id" id="fabricant_id">
            <option></option>
            @foreach ($fabricants as $fabricant)
                <option value="{{ $fabricant->id }}">{{ $fabricant->nom }}</option>
            @endforeach
        </select>
        @if ($errors->has('fabricant_id'))
            <div class="alert alert-danger mt-4">
                {{ $errors->first('fabricant_id') }}
            </div>
        @endif
    </div>
    <button class="edit-submit-btn my-5" type="submit">Créer le produit</button>
  </form>
@endsection
<script src="{{ asset('js/newProductLinkActive.module.js') }}" defer></script>
<script type="text/javascript" >
     
    // La fonction previewPicture
    var previewPicture  = function (e) {
      // L'image img#image
      var image = document.getElementById("image");
      let pictureInput = document.getElementById("picture");

        // e.files contient un objet FileList
        const [picture] = e.files

        // "picture" est un objet File
        if (picture) {
            // L'objet FileReader
            var reader = new FileReader();
            // L'événement déclenché lorsque la lecture est complète
            reader.onload = function (e) {
                // On change l'URL de l'image (base64)
                image.src = e.target.result
            }

            // On lit le fichier "picture" uploadé
            reader.readAsDataURL(picture)

        }
        console.log("ok - " + pictureInput.value)
    } 
</script>