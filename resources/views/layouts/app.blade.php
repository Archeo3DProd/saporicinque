<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sapori del Ticino</title>
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Bootstrap Icons (optionnel) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    {{-- Ton CSS perso (optionnel) --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/produit.css') }}">
    {{-- Animated scroll --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    {{-- GLightbox --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

</head>
<body class="d-flex flex-column min-vh-100">

    {{-- NAVBAR --}}
    <header>            
        @if (Auth::user())
            @if (Route::is('accueil'))
                @include('layouts.components.navbar-admin')
                @include('layouts.components.navbar-top')
                @include('layouts.components.navbar')
                @include('layouts.components.banner')
            @else
                @include('layouts.components.navbar-admin')
                @include('layouts.components.navbar-top')
                @include('layouts.components.navbar')
            @endif
        @else
            @include('layouts.components.navbar-top')
            @include('layouts.components.navbar')
            @include('layouts.components.banner')
        @endif
    </header>

    {{-- CONTENU PRINCIPAL --}}
    <main class="flex-grow-1">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('layouts.components.footer')

    {{-- JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- GLightbox --}}
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        const lightbox = GLightbox({
            selector: '.glightbox'
        });
    </script>
    {{-- Animated scroll --}}
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
