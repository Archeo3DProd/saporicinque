<?php

use App\Http\Controllers\CommandeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Models\Produit;
use Illuminate\Support\Facades\Route;

    
Route::get('/accueil', [HomeController::class, 'accueil'])->name('accueil');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/aPropos', [HomeController::class, 'aPropos'])->name('aPropos');
Route::get('/liens', [HomeController::class, 'liens'])->name('liens');
Route::get('/recettes', [HomeController::class, 'recettes'])->name('recettes');
Route::get('/tous_les_produits', [HomeController::class, 'tous_les_produits'])->name('tous_les_produits');
Route::get('/produits/{categorie}', [HomeController::class, 'produits'])->name('produits/{categorie}');
Route::get('/produit/{slug}', [HomeController::class, 'produit'])->name('produit');
Route::get('/recherche', [HomeController::class, 'recherche'])->name('recherche');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/login/authenticate', [LoginController::class, 'authenticate'])->name('login.authenticate');
    Route::post('/register/authenticate', [RegisterController::class, 'store'])->name('register.authenticate');

});

Route::middleware('auth')->group(function () {

    Route::view('/home', 'home')->name('home');
    Route::get('/logout',  [LogoutController::class, 'logout'])->name('logout');
    Route::get('/profil', [UserController::class, 'profil'])->name('profil');
    Route::post('/profil_update', [UserController::class, 'profil_update'])->name('profil_update');

    // Pages Produits
    Route::get('/produits', [ProduitController::class, 'index'])->name('produits');
    Route::post('/produit_details', [ProduitController::class, 'produit_details'])->name('produit_details');
    Route::get('/produit/edit/{id}', [ProduitController::class, 'edit'])->name('produit/edit');
    Route::post('/produit/edit', [ProduitController::class, 'edit_post'])->name('produit.edit');

});

/*
# Route::get('/produits', [ProduitController::class, 'index']);
Route::get('/produits/{slug}', [ProduitController::class, 'show']);

Route::post('/panier/ajouter/{product}', [PanierController::class, 'ajouter']);
Route::get('/panier', [PanierController::class, 'afficher']);
Route::delete('/panier/supprimer/{id}', [PanierController::class, 'supprimer']);

Route::get('/commande', [CommandeController::class, 'afficherFormulaire']);
Route::post('/commande', [CommandeController::class, 'envoyer']);

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminProductController::class, 'index']);
    Route::get('/create', [AdminProductController::class, 'create']);
    Route::post('/', [AdminProductController::class, 'store']);
    Route::get('/{product}/edit', [AdminProductController::class, 'edit']);
    Route::put('/{product}', [AdminProductController::class, 'update']);
    Route::delete('/{product}', [AdminProductController::class, 'destroy']);
});
*/