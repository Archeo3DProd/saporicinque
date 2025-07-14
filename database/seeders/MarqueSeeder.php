<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {DB::table('marques')->insert(array(
                [                
                    'nom' => 'I Quatro',
                    'slug' => 'i-quatro'
                ],
                [                
                    'nom' => 'Delea',
                    'slug' => 'delea'
                ],
                [                
                    'nom' => 'Planeta',
                    'slug' => 'planeta'
                ],
                [                
                    'nom' => 'Olachi',
                    'slug' => 'olachi'
                ],
                [                
                    'nom' => 'Quattromani',
                    'slug' => 'quattromani'
                ],
                [                
                    'nom' => 'Miros',
                    'slug' => 'miros'
                ],
                [                
                    'nom' => 'Marzaghe',
                    'slug' => 'marzaghe'
                ],
                [                
                    'nom' => 'Amara Generoso',
                    'slug' => 'amara-generoso'
                ],
                [                
                    'nom' => 'Barbaro',
                    'slug' => 'barbaro'
                ],
                [                
                    'nom' => 'Bisbino',
                    'slug' => 'bisbino'
                ],
                [                
                    'nom' => 'Fattorie Giacobazzi',
                    'slug' => 'fattorie-giacobazzi'
                ],
                [                
                    'nom' => 'Yoga',
                    'slug' => 'yoga'
                ],
                [                
                    'nom' => '#bio',
                    'slug' => '#bio'
                ],
                [                
                    'nom' => 'De Cecco',
                    'slug' => 'de-cecco'
                ],
                [                
                    'nom' => 'Coelsanus',
                    'slug' => 'coelsanus'
                ],
                [                
                    'nom' => 'Molino Spadoni',
                    'slug' => 'molino-spadoni'
                ],
                [                
                    'nom' => 'Ori di Langa',
                    'slug' => 'ori-di-langa'
                ],
                [                
                    'nom' => 'Tartufi Tentazioni',
                    'slug' => 'tartufi-tentazioni'
                ],
                [                
                    'nom' => 'Scotti',
                    'slug' => 'scotti'
                ],
                [                
                    'nom' => 'Cantina alla Maggia',
                    'slug' => 'cantina-alla-maggia'
                ],
                [                
                    'nom' => 'Terreni alla Maggia',
                    'slug' => 'terreni-alla-maggia'
                ],
                [                
                    'nom' => 'Buletti',
                    'slug' => 'buletti'
                ],
                [                
                    'nom' => 'Erbe Ticino',
                    'slug' => 'erbe-ticino'
                ],
                [                
                    'nom' => 'Créa Ceto',
                    'slug' => 'crea-ceto'
                ],
                [                
                    'nom' => 'Appenzeller Bier',
                    'slug' => 'appenzeller-bier'
                ],
                [                
                    'nom' => 'Locher',
                    'slug' => 'locher'
                ],
                [                
                    'nom' => 'Vintage Sour Beer',
                    'slug' => 'vintage-sour-beer'
                ],
                [                
                    'nom' => 'Swiss Alpine',
                    'slug' => 'swiss-alpine'
                ],
                [                
                    'nom' => 'Movenpick',
                    'slug' => 'movenpick'
                ],
                [                
                    'nom' => 'Fizzy',
                    'slug' => 'fizzy'
                ],
            ));
        }
    }
}
