<?php

use Illuminate\Database\Seeder;

class LocalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localities = [
            1000 => 'Bruxelles',
            1020 => 'Laeken',
            1030 => 'Schaerbeek',
            1040 => 'Etterbeek',
            1050 => 'Ixelles',
            1060 => 'St-Gilles',
            1070 => 'Anderlecht',
            1080 => 'Molenbeek',
            1090 => 'Jette',
            1180 => 'Uccle',
        ];
        
        foreach($localities as $cp => $locality) {
            DB::table('localities')->insert([
                'code_postal' => $cp,
                'locality' => $locality,
            ]);
        }
    }
}
