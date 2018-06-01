<?php

use Illuminate\Database\Seeder;

class RepresentationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('representations')->insert([
            'show_id' => 1,
            'when' => '2018-06-01 20:30:00',
            'location_id' => 1,
        ]);
        
        DB::table('representations')->insert([
            'show_id' => 1,
            'when' => '2018-06-13 20:30:00',
            'location_id' => 1,
        ]);
        
        DB::table('representations')->insert([
            'show_id' => 1,
            'when' => '2018-06-20 20:30:00',
            'location_id' => 2,
        ]);
    }
}
