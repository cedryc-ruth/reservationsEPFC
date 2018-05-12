<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'slug' => 'delvaux',
            'designation' => 'Espace Delvaux',
            'address' => 'rue du Port 15',
            'locality_id' => 1,
            'website' => '',
            'phone' => ''
        ]);
        
        DB::table('locations')->insert([
            'slug' => 'dexia',
            'designation' => 'Dexia Media Center',
            'address' => 'avenue des Arts 450',
            'locality_id' => 2,
            'website' => '',
            'phone' => ''
        ]);
    }
}
