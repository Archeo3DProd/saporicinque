<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $authenticated = Auth::attempt($credentials);
        if (!$authenticated) {
            Session::flash('error', "Credentials does not match our record.");
            return Redirect::back();
        } else {
            return redirect()->route('accueil');
        }
    }
}
