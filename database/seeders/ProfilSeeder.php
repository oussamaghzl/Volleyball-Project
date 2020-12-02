<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('profils')->insert([
             [
                'nom' => 'Gojo',
                'prenom' => "Satoru",
                'age' => 21,
                'numeros' => '1021212121',
                'email' => 'Abdel-le-bg@gmail.com',
                'genre' => 'Homme',
                'origin' => 'Japan',
                'photo' => 'head2.png',
                'equipes_id' => 3,
                'poste_id' => 2,

             ],
             [
                'nom' => 'Abdelita',
                'prenom' => "Mamasita",
                'age' => 25,
                'numeros' => '1021212121',
                'email' => 'Abdel-le-bg@gmail.com',
                'genre' => 'Homme',
                'origin' => 'Maroc',
                'photo' => 'Onizuka.png',
                'equipes_id' => 3,
                'poste_id' => 4,

             ],
             [
                'nom' => 'Ghezalito',
                'prenom' => "Oussama",
                'age' => 21,
                'numeros' => '1021212121',
                'email' => 'Oussama-le-roi@gmail.com',
                'genre' => 'Homme',
                'origin' => 'Algerie',
                'photo' => 'head.png',
                'equipes_id' => 2,
                'poste_id' => 2,
             ],
             [
                'nom' => 'Queen',
                'prenom' => "Zidane",
                'age' => 25,
                'numeros' => '1021212121',
                'email' => 'Zidane-theDiamond@gmail.com',
                'genre' => 'Homme',
                'origin' => 'Maroc',
                'photo' => 'head2.png',
                'equipes_id' => 1,
                'poste_id' => 3,
             ],
         ]);
    }
}
