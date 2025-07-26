@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <div class=" d-flex align-items-center justify-content-center">
        <main class="form-signin w-25 m-auto bg-body-tertiary p-5" style="width: 60vh!important;">
            <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf
                <h2 class="h3 mb-3 fw-normal">Connexion</h2>
                @if (Session::has('error'))
                    <div class="message mb-2 text-danger">{{ Session::get('error') }}</div>
                @endif
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="email">
                    <label for="email">E-mail</label>
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
                <button class="btn btn-primary w-100 pt-2" type="submit">Connexion</button>
                <p class="text-center mt-4">Pas encore inscrit ?</p>
                <a href="{{ route('register') }}" class="btn btn-primary pb-2 w-100">S'enregistrer</a>
            </form>
        </main>
    </div>
@endsection