
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Produits du Tessin')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" />
            </div>
            <nav>
                <a href="/">Accueil</a>
                <a href="/produits">Produits</a>
                <a href="/panier">Panier</a>
                <a href="/commande">Commande</a>
                <a href="/admin">Admin</a>
            </nav>
        </aside>
        <main class="content">
            <div class="fade-in">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>