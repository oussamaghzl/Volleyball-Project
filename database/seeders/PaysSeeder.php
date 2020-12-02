<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pays')->insert([
            [
                'pays' => 'Algerie',
                'continent' => 'Afrique'
            ],
            [
                'pays' => 'Maroc',
                'continent' => 'Afrique'
            ],
            [
                'pays' => 'Espagne',
                'continent' => 'Europe'
            ],
            [
                'pays' => 'Rien',
                'continent' => 'Rien'
            ],
        ]);
    }
}
