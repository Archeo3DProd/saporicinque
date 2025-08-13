<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {DB::table('roles')->insert(array(
                [                
                    'nom' => 'Owner',
                    'slug' => 'owner'
                ],
                [                
                    'nom' => 'Admin',
                    'slug' => 'admin'
                ],
                [                
                    'nom' => 'Privé',
                    'slug' => 'prive'
                ],
                [                
                    'nom' => 'Distributeur',
                    'slug' => 'distributeur'
                ],
                [                
                    'nom' => 'Gastro',
                    'slug' => 'gastro'
                ],
            ));
        }
    }
}
