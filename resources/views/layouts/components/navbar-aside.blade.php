<nav class="navbar-aside text-center">
    <ul>
        @foreach ($categories as $categorie)
        <li>
            <a href="{{ route('produits/{categorie}', ['categorie' => $categorie->slug]) }}">{{ $categorie->nom }}</a>
        </li>
        @endforeach
    </ul>
</nav>