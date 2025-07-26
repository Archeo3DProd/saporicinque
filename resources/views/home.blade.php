
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
                <p class="lead">Seulement 249.- les 500 grammes</p>
                <p><a class="btn btn-secondary" href="">En savoir plus &raquo;</a></p>
            </div>
            <div class="featurette-image">
                <img src="{{ asset($produit_highlighted->image) }}" alt={{ $produit_highlighted->nom }}>
            </div>
        </div>
    </div>
    
    <div class="section-up">
        <a href="#" class="section-left">
            <image src="" alt="">
            <div class="section-left-text">
                <h5>{{ $produits[0]->nom }}</h5>
                <p>
                    {{ $produits[0]->description }}
                <img src="{{ $produits[0]->image }}" alt="{{ $produits[0]->nom }}">
                </p>
                    
                <p>{{ $produits[0]->prix }}</p>
            </div>
        </a>
        <div class="section-right">
            <a href="#" class="section-small-item mb-3">
                <image src="{{ asset('image/proposition_2/blanc.jpg') }}" alt="">
                <div class="section-small-item-text">
                    <h5>Pinot Gris</h5>
                    <p>
                        Ticino
                    </p>
                    <p>76.90 le carton de 6 bouteilles</p>
                </div>
            </a>
            <a href="#" class="section-small-item mb-3">
                <image src="{{ asset('image/proposition_2/pates.png') }}" alt="">
                <div class="section-small-item-text">
                    <h5>Pâtes fraîches</h5>
                    <p>
                        De ma mémé
                    </p>
                    <p>6.90 les 600gr</p>
                </div>
            </a>
            <a href="#" class="section-small-item">
                <image src="{{ asset('image/proposition_2/farine.png') }}" alt="">
                <div class="section-small-item-text">
                    <h5>Farine blanche</h5>
                    <p>
                        &Aacute; la meule de pierre
                    </p>
                    <p>4.50 le kilo</p>
                </div>
            </a>
            <a href="#" class="section-small-item">
                <image src="{{ asset('image/proposition_2/framboises.jpg') }}" alt="">
                <div class="section-small-item-text">
                    <h5>Framboises</h5>
                    <p>
                        De par chez nous
                    </p>
                    <p>8.90 le kilo</p>
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
                <image src="{{ asset('image/proposition_2/blanc.jpg') }}" alt="">
                <div class="section-small-item-text">
                    <h5>Pinot Gris</h5>
                    <p>
                        Ticino
                    </p>
                    <p>76.90 le carton de 6 bouteilles</p>
                </div>
            </a>
            <a href="#" class="section-small-item mb-3">
                <image src="{{ asset('image/proposition_2/pates.png') }}" alt="">
                <div class="section-small-item-text">
                    <h5>Pâtes fraîches</h5>
                    <p>
                        De ma mémé
                    </p>
                    <p>6.90 les 600gr</p>
                </div>
            </a>
            <a href="#" class="section-small-item">
                <image src="{{ asset('image/proposition_2/farine.png') }}" alt="">
                <div class="section-small-item-text">
                    <h5>Farine blanche</h5>
                    <p>
                        &Aacute; la meule de pierre
                    </p>
                    <p>4.50 le kilo</p>
                </div>
            </a>
            <a href="#" class="section-small-item">
                <image src="{{ asset('image/proposition_2/framboises.jpg') }}" alt="">
                <div class="section-small-item-text">
                    <h5>Framboises</h5>
                    <p>
                        De par chez nous
                    </p>
                    <p>8.90 le kilo</p>
                </div>
            </a>
        </div>
        <a href="#" class="section-left">
            <image src="{{ asset('image/proposition_2/miel.jpg') }}" alt="">
            <div class="section-left-text">
                <h5>Miel extra-frais</h5>
                <p>
                    Léventine
                </p>
                <p>12.50 le pot de 500gr</p>
            </div>
        </a>
    </div>
    <div class="small-cards">
        <a href="#" class="small-card">
            <image src="{{ asset('image/proposition_2/blanc.jpg') }}" alt="">
            <div class="section-small-item-text">
                <h5>Pinot Gris</h5>
                <p>
                    Ticino
                </p>
                <p>76.90 le carton de 6 bouteilles</p>
            </div>
        </a>
        <a href="#" class="small-card">
            <image src="{{ asset('image/proposition_2/pates.png') }}" alt="">
            <div class="section-small-item-text">
                <h5>Pâtes fraîches</h5>
                <p>
                    De ma mémé
                </p>
                <p>6.90 les 600gr</p>
            </div>
        </a>
        <a href="#" class="small-card">
            <image src="{{ asset('image/proposition_2/farine.png') }}" alt="">
            <div class="section-small-item-text">
                <h5>Farine blanche</h5>
                <p>
                    &Aacute; la meule de pierre
                </p>
                <p>4.50 le kilo</p>
            </div>
        </a>
        <a href="#" class="small-card">
            <image src="{{ asset('image/proposition_2/framboises.jpg') }}" alt="">
            <div class="section-small-item-text">
                <h5>Framboises</h5>
                <p>
                    De par chez nous
                </p>
                <p>8.90 le kilo</p>
            </div>
        </a>
        <a href="#" class="small-card">
            <image src="{{ asset('image/proposition_2/blanc.jpg') }}" alt="">
            <div class="section-small-item-text">
                <h5>Pinot Gris</h5>
                <p>
                    Ticino
                </p>
                <p>76.90 le carton de 6 bouteilles</p>
            </div>
        </a>
        <a href="#" class="small-card">
            <image src="{{ asset('image/proposition_2/pates.png') }}" alt="">
            <div class="section-small-item-text">
                <h5>Pâtes fraîches</h5>
                <p>
                    De ma mémé
                </p>
                <p>6.90 les 600gr</p>
            </div>
        </a>
        <a href="#" class="small-card">
            <image src="{{ asset('image/proposition_2/farine.png') }}" alt="">
            <div class="section-small-item-text">
                <h5>Farine blanche</h5>
                <p>
                    &Aacute; la meule de pierre
                </p>
                <p>4.50 le kilo</p>
            </div>
        </a>
        <a href="#" class="small-card">
            <image src="{{ asset('image/proposition_2/framboises.jpg') }}" alt="">
            <div class="section-small-item-text">
                <h5>Framboises</h5>
                <p>
                    De par chez nous
                </p>
                <p>8.90 le kilo</p>
            </div>
        </a>
    </div>
    <div class="">
        <div class="mt-5 text-center mb-5">
            <h1>&Agrave; propos de nous</h1>
        </div>
        <div class="services-cards">
            <div class="mt-3">
                Pellentesque nec interdum arcu. Nullam mollis vulputate diam eu laoreet. Maecenas dignissim lorem vel congue viverra. Pellentesque condimentum porttitor eros id rutrum. Nulla posuere tortor in tincidunt iaculis. Vestibulum at purus augue. Fusce commodo finibus velit elementum suscipit. Nullam ullamcorper aliquam libero ac lobortis. Quisque nec lacus accumsan, vulputate magna sed, auctor risus. 
            </div>
            <div class="mt-3">
                Nunc feugiat erat sit amet justo condimentum, auctor elementum lorem vestibulum. Proin hendrerit justo quis tempus tempus. Integer dignissim mauris a viverra malesuada. Morbi luctus dui vel dolor fringilla, vel rutrum est consectetur. Morbi facilisis semper nibh. In cursus felis auctor, lacinia arcu sit amet, volutpat massa. Donec dictum varius leo, ut efficitur lectus posuere nec. Vivamus arcu eros, varius vel nunc at, ornare lacinia turpis. 
            </div>
            <div class="mt-3 mb-5">
                Vivamus sollicitudin odio ac imperdiet vestibulum. Sed eleifend diam ex, ac aliquam orci dignissim ut. Suspendisse placerat, magna in pretium placerat, ex est volutpat nunc, at consectetur arcu sapien ac magna. Pellentesque hendrerit egestas nulla nec dapibus. Aliquam faucibus est ipsum, eget volutpat odio dignissim sed. Integer nec aliquam ligula. Nunc at velit vitae augue venenatis aliquam eu vehicula sapien. Donec mi mi, lacinia imperdiet risus ac, consectetur iaculis mauris
            </div>
        </div>
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