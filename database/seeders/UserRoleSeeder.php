<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {DB::table('user_roles')->insert(array(
                [                
                    'name' => 'Owner',
                    'slug' => 'owner'
                ],
                [                
                    'nom' => 'Admin',
                    'slug' => 'admin'
                ],
                [                
                    'nom' => 'Client',
                    'slug' => 'client'
                ],
            ));
        }
    }
}
