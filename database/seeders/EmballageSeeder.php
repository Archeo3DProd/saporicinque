<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmballageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {DB::table('emballages')->insert(array(
                [                
                    'nom' => 'Verre',
                    'slug' => 'verre'
                ],
                [
                    'nom' => 'PET',
                    'slug' => 'pet'
                ],
                [
                    'nom' => 'Canette alu',
                    'slug' => 'canette-alu'
                ],
            ));
        }
    }
}
