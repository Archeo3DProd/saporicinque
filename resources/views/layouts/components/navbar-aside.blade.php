<nav class="navbar-aside text-center">
    <ul>
        @foreach ($super_categories as $super_categorie)
        <li>
            <a href="">{{ $super_categorie->nom }}</a>
        </li>
        @endforeach
    </ul>
</nav>