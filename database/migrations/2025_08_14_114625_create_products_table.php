<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->unique()->nullable();
            $table->string('slug')->unique()->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->float('prix_prive')->nullable();
            $table->float('prix_distributeur')->nullable();
            $table->float('prix_gastro')->nullable();
            $table->integer('unite_id')->nullable();
            $table->float('prix_unite')->nullable();
            $table->integer('emballage_id')->nullable();
            $table->float('alcoolemie')->nullable();
            $table->integer('categorie_id')->nullable();
            $table->integer('sous_categorie_id')->nullable();
            $table->integer('fabricant_id')->nullable();
            $table->float('quantite')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
