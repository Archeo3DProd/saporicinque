<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Produit;
use App\Models\UserRole;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    public function profil(Request $request) {
        $locale = 'fr';
        app()->setlocale($locale);
        Carbon::setlocale($locale);
        $registration_date = Auth::user()->created_at->translatedFormat('j F, Y');
        
        return view('user.profil', ['registration_date' => $registration_date]);
    } 

    public function profil_update(Request $request) {
        /*
        $request->validate([
            'name' => ['string', 'min:3', 'max:255'],
            'email' => ['email', 'max:255', 'unique:users,email'],
            'password' => ['min:6'],
            'password_confirm' => ['same:password']
        ]);
        */
        $validated = $request->validate([
            'name' => 'nullable|string|min:5|max:255|unique:users',
            'email' => 'nullable|email|min:6|max:255|unique:users',
            'password' => 'nullable|string|min:6|max:255',
            'password_confirm' => 'nullable|same:password'
        ]);
        $user = Auth::user();
        if($request->name != null) {
            $user->name = $request->name;
        }
        if($request->email != null) {
            $user->email = $request->email;
        }
        if(($request->password != null) && ($request->password_confirm != null)) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return back()->with('message', 'Les changements ont bien été effectués');
    }
}
