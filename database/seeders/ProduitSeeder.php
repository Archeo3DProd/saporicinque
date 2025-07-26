<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DirectoryIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $randomizer = new \Random\Randomizer();
        $GLOBALS['array_files'] = [];
            function filesInDir($tdir)
            {
                global $array_files;
                $dirs = scandir($tdir);
                foreach($dirs as $file)
                {
                    if (($file == '.')||($file == '..'))
                    {
                    }
                    elseif (is_dir($tdir.'/'.$file))
                    {
                            filesInDir($tdir.'/'.$file);
                    }
                    else
                    {
                            #echo $tdir.'/'.$file."\n";
                            if(!in_array($tdir.'/'.$file, $array_files)) {
                                array_push($array_files, $tdir.'/'.$file);
                            }
                    }
                }
                return $array_files;
            }
        $premier = ((filesInDir('public/images/produits'))[0]);
        $all_products = ((filesInDir('public/images/produits')));
        $index = 4;

        foreach($all_products as $product) {
            $product = explode('/', $product);
            $i = (count($product));
            #6 image
            $image = 'images/produits/' . $product[$i-3]  . "/" . $product[$i-2] . "/" . strtolower($product[$i-1]);
            #2 nom
            $nom = explode('.', strtolower($product[$i-1]))[0];
            #3 slug
            $slug = Str::slug($nom);
            #4 description
            $desctiption = $faker->paragraph(rand(6, 9));
            #5 prix
            $prix = (number_format(round($randomizer->getFloat(2, 110), 1), 2));
            #9 unite_id
            $unite_id = rand(1, 6);
            #10 prix_unite
            $prix_unite = (number_format(round($randomizer->getFloat(0, 15), 1), 2));
            #11 emballage_id
            $emballage_id = rand(1, 3);
            #13 categorie_id
            $categorie_id = rand(1, 25);
            #15 marque
            $marque_id = rand(1, 30);
            #12 alcoolemie
            if(($marque_id < 15) || ($marque_id > 25)) {
                $alcoolemie = (number_format(round($randomizer->getFloat(0, 48), 1), 1));
            } else {
                $alcoolemie = null;
            }
            
            {DB::table('produits')->insert(array(   
                    [                
                        'nom' => $nom,
                        'slug' => $slug,
                        'description' => $desctiption,
                        'prix' => $prix,
                        'image' => $image,
                        'unite_id' => $unite_id,
                        'prix_unite' => $prix_unite,
                        'emballage_id' => $emballage_id,
                        'alcoolemie' => $alcoolemie,
                        'categorie_id' => $categorie_id,
                        'marque_id' => $marque_id,
                    ],
                ));
            }
        }
        
        /*
        {DB::table('produits')->insert(array(   
                [                
                    'nom' => '',
                    'slug' => '',
                    'description' => '',
                    'prix' => '',
                    'image' => '',
                    'unite_id' => '',
                    'prix_unite' => '',
                    'emballage_id' => '',
                    'alcoolemie' => '',
                    'categorie_id' => '',
                    'sousCategorie_id' => '',
                    'marque' => '',
                ],
                [                
                    'nom' => '',
                    'slug' => '',
                    'description' => '',
                    'prix' => '',
                    'image' => '',
                    'unite_id' => '',
                    'prix_unite' => '',
                    'emballage_id' => '',
                    'alcoolemie' => '',
                    'categorie_id' => '',
                    'sousCategorie_id' => '',
                    'marque' => '',
                ],
            ));
        }
        */
    }
}
