<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SousCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {DB::table('sous_categories')->insert(array(
                [
                    'nom' => 'Vins Blancs',
                    'slug' => 'vins_blancs',
                    'categorie_id' => '1'
                ],
                [                
                    'nom' => 'Vins Rosés',
                    'slug' => 'vins_roses',
                    'categorie_id' => '1'
                ],
                [                
                    'nom' => 'Vins Rouges',
                    'slug' => 'vins_rouges',
                    'categorie_id' => '1'
                ],
                [                
                    'nom' => 'Vins Périllants',
                    'slug' => 'vins_petillants',
                    'categorie_id' => '1'
                ],
                [                
                    'nom' => 'Grappa et Liqueurs',
                    'slug' => 'grappa_et_liqueurs',
                    'categorie_id' => '1'
                ],
                [                
                    'nom' => 'Whisky et Gin',
                    'slug' => 'whisky_et_gin',
                    'categorie_id' => '1'
                ],
                [                
                    'nom' => 'Bières',
                    'slug' => 'bieres',
                    'categorie_id' => '1'
                ],
                [                
                    'nom' => 'Riz',
                    'slug' => 'riz',
                    'categorie_id' => '3'
                ],
                [                
                    'nom' => 'Polenta et Maïs',
                    'slug' => 'polenta_et_mais',
                    'categorie_id' => '3'
                ],
                [                
                    'nom' => 'Farines',
                    'slug' => 'farines',
                    'categorie_id' => '3'
                ],
                [                
                    'nom' => 'Pâtes',
                    'slug' => 'pates',
                    'categorie_id' => '3'
                ],
                [                
                    'nom' => 'Huiles et Vinaigres',
                    'slug' => 'huiles_et_vinaigeres',
                    'categorie_id' => '5'
                ],
                [                
                    'nom' => 'Assaisonnements',
                    'slug' => 'assaisonnements',
                    'categorie_id' => '5'
                ],
                [                
                    'nom' => 'Antipasti',
                    'slug' => 'antipasti',
                    'categorie_id' => '3'
                ],
                [                
                    'nom' => 'Grissini et Chips',
                    'slug' => 'grissini_et_chips',
                    'categorie_id' => '3'
                ],
                [                
                    'nom' => 'Miels',
                    'slug' => 'miels',
                    'categorie_id' => '4'
                ],
                [                
                    'nom' => 'Bonbons au miel',
                    'slug' => 'bonbons_au_miel',
                    'categorie_id' => '4'
                ],
                [                
                    'nom' => 'Pâtes à tartiner et Nougat',
                    'slug' => 'pates_a_tartines_et_nougat',
                    'categorie_id' => '4'
                ],
                [                
                    'nom' => 'Chocolat',
                    'slug' => 'chocolat',
                    'categorie_id' => '4'
                ],
                [                
                    'nom' => 'Confitures',
                    'slug' => 'confitures',
                    'categorie_id' => '4'
                ],
                [                
                    'nom' => 'Sirops',
                    'slug' => 'sirops',
                    'categorie_id' => '2'
                ],
                [                
                    'nom' => 'Pâtisseries artisanales',
                    'slug' => 'patisseries_artisanales',
                    'categorie_id' => '4'
                ],
                [                
                    'nom' => 'Marrons glacés',
                    'slug' => 'marrons_glaces',
                    'categorie_id' => '4'
                ],
                [                
                    'nom' => 'Gazzosa Fizzy',
                    'slug' => 'gazzosa_fizzy',
                    'categorie_id' => '2'
                ],
                [                
                    'nom' => 'Tisanes',
                    'slug' => 'tisanes',
                    'categorie_id' => '2'
                ],
            ));
        }
    }
}
