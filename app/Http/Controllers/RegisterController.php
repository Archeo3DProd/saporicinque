<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('user.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:6'],
            'password-confirmation' => ['required', 'same:password']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' =>  $request->email,
            'password' =>  Hash::make($request->password),
        ]);
        Auth::login($user);
        return view('user.profil')->with('login_message', 'Vous êtes bien connecté');
    }
}
