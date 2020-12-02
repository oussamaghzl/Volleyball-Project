<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('equipes')->insert([
             [
                'coach' => 'Pas de coach',
                'equipe' => "Pas d'equipe",
                'ville' => 'Rien',
                'nombres' => '10',
                'pays_id' => 4,
                'membres' => 1,
             ],
             [
                 'coach' => 'Zidane',
                 'equipe' => 'Real Madrid',
                 'ville' => 'Madrid',
                 'nombres' => '2',
                 'pays_id' => 3,
                 'membres' => 1,


             ],
             [
                 'coach' => 'Abdelmajid',
                 'equipe' => 'Lakers',
                 'ville' => 'Tanger',
                 'nombres' => '5',
                 'pays_id' => 2,
                 'membres' => 2,

             ],
             [
                 'coach' => 'Oussama',
                 'equipe' => 'Toronto Raptors',
                 'ville' => 'Oran',
                 'nombres' => '7',
                 'pays_id' => 1,
                 'membres' => 0,

             ],
         ]);
    }
}
