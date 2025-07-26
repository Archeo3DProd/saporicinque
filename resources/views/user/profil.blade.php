<link rel="stylesheet" href="{{ 'css/profil.css' }}">
<script src="{{ 'js/updateProfile.js' }}"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h2 class="text-center">Profil</h2>
    @if (session('message'))
        <div class="alert alert-success text-center" role="alert">
            {!! session('message') !!}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Role</th>
                <th>E-mail</th>
                <th>Enregistré depuis</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ Auth::user()->name }}</td>
                <td>{{ Auth::user()->role }}</td>
                <td>{{ Auth::user()->email }}</td>
                <td>{{ $registration_date }}</a></td>
            </tr>
            </tbody>
        </table>
        
        <div class="form-container">
            <form class="update-form" action="{{ route('profil_update') }}" method="post">
            @csrf
                <div class="form-field">
                    <p>
                        Nom actuel : {{ Auth::user()->name }}
                    </p>
                    <label for="name-input">Nouveau nom</label>
                    <input id="name-input" name="name" type="text" oninput="handleChange(this)">
                    <button id="name-button" class="send-button mt-3" type="submit" disabled>Valider</button>
                </div>
                <hr class="featurette-divider">
                <div class="form-field">
                    <p>
                        E-mail actuel : {{ Auth::user()->email }}
                    </p>
                    <label for="email-input">Nouvel e-mail</label>
                    <input id="email-input" name="email" type="text" oninput="handleChange(this)">
                    <button id="email-button" class="send-button mt-3" type="submit" disabled>Valider</button>
                </div>
                <hr class="featurette-divider">
                <div class="form-field">
                    <label for="password-input">Nouveau mot de passe</label>
                    <input id="password-input" name="password" type="password" oninput="handleChange(this)">
                    <label class="mt-3" for="password-input-confirm">Confirmation du nouveau mot de passe</label>
                    <input id="password-input-confirm" name="password_confirm" type="password">
                    <button id="password-button" class="send-button mt-3" type="submit" disabled>Valider</button>
                </div>

            </form>
        </div>
        
    </div>

@endsection