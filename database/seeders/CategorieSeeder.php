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
    {DB::table('categories')->insert(array(
            [
                'nom' => 'Vins Blancs',
                'slug' => 'vins_blancs',
                'superCategorie_id' => '1'
            ],
            [                
                'nom' => 'Vins Rosés',
                'slug' => 'vins_roses',
                'superCategorie_id' => '1'
            ],
            [                
                'nom' => 'Vins Rouges',
                'slug' => 'vins_rouges',
                'superCategorie_id' => '1'
            ],
            [                
                'nom' => 'Vins Périllants',
                'slug' => 'vins_petillants',
                'superCategorie_id' => '1'
            ],
            [                
                'nom' => 'Grappa et Liqueurs',
                'slug' => 'grappa_et_liqueurs',
                'superCategorie_id' => '1'
            ],
            [                
                'nom' => 'Whisky et Gin',
                'slug' => 'whisky_et_gin',
                'superCategorie_id' => '1'
            ],
            [                
                'nom' => 'Bières',
                'slug' => 'bieres',
                'superCategorie_id' => '1'
            ],
            [                
                'nom' => 'Riz',
                'slug' => 'riz',
                'superCategorie_id' => '3'
            ],
            [                
                'nom' => 'Polenta et Maïs',
                'slug' => 'polenta_et_mais',
                'superCategorie_id' => '3'
            ],
            [                
                'nom' => 'Farines',
                'slug' => 'farines',
                'superCategorie_id' => '3'
            ],
            [                
                'nom' => 'Pâtes',
                'slug' => 'pates',
                'superCategorie_id' => '3'
            ],
            [                
                'nom' => 'Huiles et Vinaigres',
                'slug' => 'huiles_et_vinaigeres',
                'superCategorie_id' => '5'
            ],
            [                
                'nom' => 'Assaisonnements',
                'slug' => 'assaisonnements',
                'superCategorie_id' => '5'
            ],
            [                
                'nom' => 'Antipasti',
                'slug' => 'antipasti',
                'superCategorie_id' => '3'
            ],
            [                
                'nom' => 'Grissini et Chips',
                'slug' => 'grissini_et_chips',
                'superCategorie_id' => '3'
            ],
            [                
                'nom' => 'Miels',
                'slug' => 'miels',
                'superCategorie_id' => '4'
            ],
            [                
                'nom' => 'Bonbons au miel',
                'slug' => 'bonbons_au_miel',
                'superCategorie_id' => '4'
            ],
            [                
                'nom' => 'Pâtes à tartiner et Nougat',
                'slug' => 'pates_a_tartines_et_nougat',
                'superCategorie_id' => '4'
            ],
            [                
                'nom' => 'Chocolat',
                'slug' => 'chocolat',
                'superCategorie_id' => '4'
            ],
            [                
                'nom' => 'Confitures',
                'slug' => 'confitures',
                'superCategorie_id' => '4'
            ],
            [                
                'nom' => 'Sirops',
                'slug' => 'sirops',
                'superCategorie_id' => '2'
            ],
            [                
                'nom' => 'Pâtisseries artisanales',
                'slug' => 'patisseries_artisanales',
                'superCategorie_id' => '4'
            ],
            [                
                'nom' => 'Marrons glacés',
                'slug' => 'marrons_glaces',
                'superCategorie_id' => '4'
            ],
            [                
                'nom' => 'Gazzosa Fizzy',
                'slug' => 'gazzosa_fizzy',
                'superCategorie_id' => '2'
            ],
            [                
                'nom' => 'Tisanes',
                'slug' => 'tisanes',
                'superCategorie_id' => '2'
            ],
        ));
    }
}
