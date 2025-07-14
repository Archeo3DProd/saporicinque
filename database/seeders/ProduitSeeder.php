<?php

namespace Database\Seeders;

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
    public function run(): void
    {
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
                            array_push($array_files, $tdir.'/'.$file);
                    }
                }
                return $array_files;
            }
        $premier = ((filesInDir('public/images/produits'))[0]);
        $index = count(explode('/', print_r($premier, true)));

        #6 image
        $image = strtolower(explode('/', print_r($premier, true))[$index-1]) . "\n";
        #2 nom
        $nom = explode('.', $image)[0];
        #3 slug
        $slug = Str::slug($nom);
        echo($nom . "\n");
        echo($slug . "\n");
        echo($image);
        echo((explode('/', print_r($premier, true))[$index-2]));
        
        foreach((explode('/', print_r($premier, true))) as $file_data) {
            #echo(strtolower($file_data) . "\n");
            $index--;
        }
        #echo(count(explode('/', print_r($premier, true))));
        #echo('Premier : ' . $premier . "\n");
        #echo('Type - ' . gettype($premier) . "\n");
        $premier_r = print_r($premier, true);
        #echo('Premier_r : ' . $premier_r . "\n");
        #echo('Type premier_r - ' . gettype($premier_r) . "\n");
        $premier_r_explode = explode('/', $premier_r);
        #echo(count($premier_r_explode));
        
        {DB::table('produits')->insert(array(            
            /*
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
                */
            ));
        }
    }
}
