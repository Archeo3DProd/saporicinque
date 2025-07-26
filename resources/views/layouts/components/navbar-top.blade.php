<div class="navbar-up">
    <a href="{{ route('accueil') }}">
      <img class="logo" src="{{ asset('images/logo_black.png') }}" alt=""> 
    </a>
    <form class="d-flex search-form" role="search">
      <input class="form-control me-2" type="search" placeholder="Rechercher un produit" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Recherche</button>
    </form>
    <div class="nav-links-pro">
        <a class="nav-link-pro navlink-contact" href="{{ route('contact') }}">
        <img class="icone" src="{{ asset('images/email.png') }}" alt="email">Contact
        </a>
        <a class="nav-link-pro navlink-espace-pro" href="{{ Auth::check() ? route('logout') : route('login') }}">
        <img class="icone" src="{{ asset('images/login.png') }}" alt="login">{{ Auth::user() ? 'Logout' : 'Espace Pros' }}
        </a>
    </div>
</div>