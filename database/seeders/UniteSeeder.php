<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {DB::table('unites')->insert(array(
                [                
                    'nom' => 'Gramme',
                    'slug' => 'gramme'
                ],
                [                
                    'nom' => 'Kilo',
                    'slug' => 'kilo'
                ],
                [                
                    'nom' => 'Pièce',
                    'slug' => 'piece'
                ],
                [                
                    'nom' => 'Centilitre',
                    'slug' => 'centilitre'
                ],
                [                
                    'nom' => 'Décilitre',
                    'slug' => 'decilitre'
                ],
                [                
                    'nom' => 'Litre',
                    'slug' => 'litre'
                ],
            ));
        }
    }
}
