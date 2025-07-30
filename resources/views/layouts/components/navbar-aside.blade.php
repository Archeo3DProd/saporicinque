<nav class="navbar-aside text-center">
    <ul>
        @foreach ($super_categories as $super_categorie)
        <li>
            <a href="{{ route('produits/{categorie}', ['categorie' => $super_categorie->slug]) }}">{{ $super_categorie->nom }}</a>
        </li>
        @endforeach
    </ul>
</nav>