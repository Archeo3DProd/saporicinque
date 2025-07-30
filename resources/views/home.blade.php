
@extends('layouts.app')
@section('title', 'Accueil')
    @if (session('logout-message'))
        <div class="alert alert-success text-center" role="alert">
            {!! session('logout-message') !!}
        </div>
    @endif
@section('content')
    <div class="main-top">
        @include('layouts.components.navbar-aside')
        <div class="featurette-wrapper">
            <div class="featurette-text">
                <h2 class="">Pendant tout le mois de mars</h2>
                <h3 class="">{{ $produit_highlighted->nom }}</h3>
                <p class="lead">50% de réduction</p>
                <p class="lead">Seulement {{ $produit_highlighted->prix }}</p>
                <p><a class="btn btn-secondary" href="{{ route('produit', ['slug' => $produit_highlighted->slug]) }}">En savoir plus &raquo;</a></p>
            </div>
            <div class="featurette-image">
                <img src="{{ asset($produit_highlighted->image) }}" alt={{ $produit_highlighted->nom }}>
            </div>
        </div>
    </div>
    
    <div class="section-up">
        <a href="{{ route('produit', ['slug' => $produits[0]->slug]) }}" class="section-left">
            <div class="section-left-text">
                <div class="mt-3">
                    <h5 class="m-0 mb-2">{{ $produits[0]->nom }}</h5>
                    <p class="m-0 mb-2">{{ $produits[0]->quantite }} {{ strtolower($produits[0]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}</p>
                    <p class="m-0">Chf {{ $produits[0]->prix }}</p>
                </div>
                <img src="{{ $produits[0]->image }}" alt="Image de {{ $produits[0]->nom }}">
                <p class="mb-3">
                    {{ $produits[1]->description }}
                </p>
            </div>
        </a>
        <div class="section-right">
            <a href="{{ route('produit', ['slug' => $produits[2]->slug]) }}" class="section-small-item mb-3">
                <img src="{{ $produits[2]->image }}" alt="{{ $produits[2]->nom }}">
                <div class="section-small-item-text">
                    <h5 class="m-0">{{ $produits[2]->nom }}</h5>
                    <p class="m-0">
                        {{ $produits[2]->quantite }} {{ strtolower($produits[2]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                    </p>
                    <p class="m-0">Chf {{ $produits[2]->prix }}</p>
                </div>
            </a>
            <a href="#" class="section-small-item mb-3">
                <img src="{{ $produits[3]->image }}" alt="{{ $produits[3]->nom }}">
                <div class="section-small-item-text">
                    <h5 class="m-0">{{ $produits[3]->nom }}</h5>
                    <p class="m-0">
                        {{ $produits[3]->quantite }} {{ strtolower($produits[3]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                    </p>
                    <p class="m-0">{{ $produits[3]->prix }}</p>
                </div>
            </a>
            <a href="#" class="section-small-item">
                <img src="{{ $produits[4]->image }}" alt="{{ $produits[4]->nom }}">
                <div class="section-small-item-text">
                    <h5 class="m-0">{{ $produits[4]->nom }}</h5>
                    <p class="m-0">
                        {{ $produits[4]->quantite }} {{ strtolower($produits[4]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                    </p>
                    <p class="m-0">{{ $produits[4]->prix }}</p>
                </div>
            </a>
            <a href="#" class="section-small-item">
                <img src="{{ $produits[5]->image }}" alt="{{ $produits[5]->nom }}">
                <div class="section-small-item-text">
                    <h5 class="m-0">{{ $produits[5]->nom }}</h5>
                    <p class="m-0">
                        {{ $produits[5]->quantite }} {{ strtolower($produits[5]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                    </p>
                    <p class="m-0">{{ $produits[5]->prix }}</p>
                </div>
            </a>
        </div>
    </div>
    <h3 class="ask-pro">
        Vous êtes un professionnel ? <a href="#">Contactez-nous</a> pour bénéficier des meilleures conditions
    </h3>
    <div class="section-down">
        <div class="section-right">
            <a href="#" class="section-small-item mb-3">
                <img src="{{ $produits[6]->image }}" alt="{{ $produits[6]->nom }}">
                <div class="section-small-item-text">
                    <h5>{{ $produits[6]->nom }}</h5>
                    <p>
                        {{ $produits[6]->quantite }} {{ strtolower($produits[6]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                    </p>
                    <p>{{ $produits[6]->prix }}</p>
                </div>
            </a>
            <a href="#" class="section-small-item mb-3">
                <img src="{{ $produits[7]->image }}" alt="{{ $produits[7]->nom }}">
                <div class="section-small-item-text">
                    <h5>{{ $produits[7]->nom }}</h5>
                    <p>
                        {{ $produits[7]->quantite }} {{ strtolower($produits[7]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                    </p>
                    <p>{{ $produits[7]->prix }}</p>
                </div>
            </a>
            <a href="#" class="section-small-item">
                <img src="{{ $produits[8]->image }}" alt="{{ $produits[8]->nom }}">
                <div class="section-small-item-text">
                    <h5>{{ $produits[8]->nom }}</h5>
                    <p>
                        {{ $produits[8]->quantite }} {{ strtolower($produits[8]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                    </p>
                    <p>{{ $produits[8]->prix }}</p>
                </div>
            </a>
            <a href="#" class="section-small-item">
                <img src="{{ $produits[9]->image }}" alt="{{ $produits[9]->nom }}">
                <div class="section-small-item-text">
                    <h5>{{ $produits[9]->nom }}</h5>
                    <p>
                        {{ $produits[9]->quantite }} {{ strtolower($produits[9]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                    </p>
                    <p>{{ $produits[9]->prix }}</p>
                </div>
            </a>
        </div>
        <a href="#" class="section-left">
            <div class="section-small-item-text">
                <h5>{{ $produits[10]->nom }}</h5>
                <p>
                    {{ $produits[10]->quantite }} {{ strtolower($produits[10]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                </p>
                <p>{{ $produits[10]->prix }}</p>
            <img src="{{ $produits[10]->image }}" alt="{{ $produits[10]->nom }}">
            </div>
                <p>{{ $produits[10]->description }}</p>
        </a>
    </div>
    <div class="small-cards">
        <a href="#" class="small-card">
            <img src="{{ $produits[11]->image }}" alt="{{ $produits[11]->nom }}">
            <div class="section-small-item-text">
                <h5>{{ $produits[11]->nom }}</h5>
                <p>
                    {{ $produits[11]->quantite }} {{ strtolower($produits[11]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                </p>
                <p>{{ $produits[11]->prix }}</p>
            </div>
        </a>
        <a href="#" class="small-card">
            <img src="{{ $produits[12]->image }}" alt="{{ $produits[12]->nom }}">
            <div class="section-small-item-text">
                <h5>{{ $produits[12]->nom }}</h5>
                <p>
                    {{ $produits[12]->quantite }} {{ strtolower($produits[12]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                </p>
                <p>{{ $produits[12]->prix }}</p>
            </div>
        </a>
        <a href="#" class="small-card">
            <img src="{{ $produits[13]->image }}" alt="{{ $produits[13]->nom }}">
            <div class="section-small-item-text">
                <h5>{{ $produits[13]->nom }}</h5>
                <p>
                    {{ $produits[13]->quantite }} {{ strtolower($produits[13]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                </p>
                <p>{{ $produits[13]->prix }}</p>
            </div>
        </a>
        <a href="#" class="small-card">
            <img src="{{ $produits[14]->image }}" alt="{{ $produits[14]->nom }}">
            <div class="section-small-item-text">
                <h5>{{ $produits[14]->nom }}</h5>
                <p>
                    {{ $produits[14]->quantite }} {{ strtolower($produits[14]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                </p>
                <p>{{ $produits[14]->prix }}</p>
            </div>
        </a>
        <a href="#" class="small-card">
            <img src="{{ $produits[15]->image }}" alt="{{ $produits[15]->nom }}">
            <div class="section-small-item-text">
                <h5>{{ $produits[15]->nom }}</h5>
                <p>
                    {{ $produits[15]->quantite }} {{ strtolower($produits[15]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                </p>
                <p>{{ $produits[15]->prix }}</p>
            </div>
        </a>
        <a href="#" class="small-card">
            <img src="{{ $produits[16]->image }}" alt="{{ $produits[16]->nom }}">
            <div class="section-small-item-text">
                <h5>{{ $produits[16]->nom }}</h5>
                <p>
                    {{ $produits[16]->quantite }} {{ strtolower($produits[16]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                </p>
                <p>{{ $produits[16]->prix }}</p>
            </div>
        </a>
        <a href="#" class="small-card">
            <img src="{{ $produits[17]->image }}" alt="{{ $produits[17]->nom }}">
            <div class="section-small-item-text">
                <h5>{{ $produits[17]->nom }}</h5>
                <p>
                    {{ $produits[17]->quantite }} {{ strtolower($produits[17]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                </p>
                <p>{{ $produits[17]->prix }}</p>
            </div>
        </a>
        <a href="#" class="small-card">
            <img src="{{ $produits[18]->image }}" alt="{{ $produits[18]->nom }}">
            <div class="section-small-item-text">
                <h5>{{ $produits[18]->nom }}</h5>
                <p>
                    {{ $produits[18]->quantite }} {{ strtolower($produits[18]->unite->nom) }}{{ $produits[1]->quantite > 1 ? 's' : '' }}
                </p>
                <p>{{ $produits[18]->prix }}</p>
            </div>
        </a>
    </div>
    <div class="newletter">
        <h3 class="text-center">
            Abonnez-vous à notre newsletter
        </h3> 
        <form class="d-flex newsletter-form" role="search">
          <input class="form-control me-2" type="search" placeholder="Votre adresse e-mail" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">S'inscrire</button>
        </form>
    </div>
@endsection