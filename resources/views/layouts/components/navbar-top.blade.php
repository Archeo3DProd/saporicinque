<div class="navbar-up">
    <a href="{{ route('accueil') }}">
      <img class="logo" src="{{ asset('images/logo_black.png') }}" alt=""> 
    </a>
    <form class="d-flex search-form" action="{{ route('recherche') }}" role="search">
      <input class="form-control me-2" id="recherche" name="recherche" type="search" placeholder="Rechercher un produit ou une recette" aria-label="Search">
      <button class="btn btn-search" type="submit">Recherche</button>
    </form>
    <div class="nav-links-pro">
        <a class="nav-link-pro navlink-contact" href="{{ route('contact') }}">
        <img class="icone-contact" src="{{ asset('images/email.png') }}" alt="email">Contact
        </a>
        <a class="nav-link-pro navlink-espace-pro" href="{{ Auth::check() ? route('logout') : route('login') }}">
        <img class="icone" src="{{ asset('images/login.png') }}" alt="login">{{ Auth::user() ? 'Logout' : 'Espace Pros' }}
        </a>
    </div>
</div>