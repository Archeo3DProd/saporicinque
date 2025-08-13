<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(array(
            [                
                'nom' => 'Boissons alcoolisées',
                'slug' => 'boissons-alcoolisees'
            ],
            [
                'nom' => 'Boissons sans alcool',
                'slug' => 'boissons-sans-alcool'
            ],
            [
                'nom' => 'Produits secs',
                'slug' => 'produits-secs'
            ],
            [
                'nom' => 'Douceurs',
                'slug' => 'douceurs'
            ],
            [
                'nom' => 'Assaisonnements',
                'slug' => 'assaisonnements'
            ],
        ));
    }
}
