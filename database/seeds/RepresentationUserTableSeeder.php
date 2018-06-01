<?php

use Illuminate\Database\Seeder;

class RepresentationUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('representation_user')->insert([
            'representation_id' => 1,
            'user_id' => 1,
            'places' => 2,
        ]);
        
        DB::table('representation_user')->insert([
            'representation_id' => 1,
            'user_id' => 2,
            'places' => 5,
        ]);
        
        DB::table('representation_user')->insert([
            'representation_id' => 2,
            'user_id' => 1,
            'places' => 1,
        ]);
    }
}
