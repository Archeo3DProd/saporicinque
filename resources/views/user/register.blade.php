@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <div class="h-100 d-flex align-items-center justify-content-center">
        <main class="form-signin m-auto bg-body-tertiary p-5" style="width: 60vh!important;">
            <form action="{{ route('register.authenticate') }}" method="POST">
                @csrf
                <h2 class="h3 mb-3 fw-normal">Inscription</h2>
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="name" placeholder="name">
                    <label for="name">Nom</label>
                    @error('name')
                        <div class="message mb-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="email">
                    <label for="email">Adresse e-mail</label>
                    @error('email')
                        <div class="message mb-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" placeholder="password">
                    <label for="password">Mot de passe</label>
                    @error('password')
                        <div class="message mb-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password-confirmation" class="form-control @error('password') is-invalid @enderror"
                        id="password" placeholder="password-confirmation">
                    <label for="password-confirmation">Confirmation du mot de passe</label>
                    @error('password')
                        <div class="message mb-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Inscription</button>
                <p class="text-center mt-4">Déjà inscrit ?</p>
                <a href="{{ route('login') }}" class="btn btn-primary pb-2 w-100">Connexion</a>
            </form>
        </main>
    </div>
@endsection