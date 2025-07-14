<?php

use App\Http\Controllers\CommandeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);

Route::get('/produits', [ProduitController::class, 'index']);
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