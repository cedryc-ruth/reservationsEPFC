<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shows')->insert([
            'slug' => 'ayiti',
            'title' => 'Ayiti',
            'poster_url' => '/wrapped/imgs/ayiti.jpg',
            'location_id' => 1,
            'bookable' => 1,
            'price' => 8.5
        ]);
        
        DB::table('shows')->insert([
            'slug' => 'cible',
            'title' => 'Cible mouvante',
            'poster_url' => '/wrapped/imgs/cible.jpg',
            'location_id' => 2,
            'bookable' => 1,
            'price' => 8.5
        ]);
        
        DB::table('shows')->insert([
            'slug' => 'chanteurbelge',
            'title' => 'Ceci n\'est pas un chanteur belge',
            'poster_url' => '/images/stories/Cecinestpasunchanteurbelge/claudebelgesaison220.jpg',
            'location_id' => 1,
            'bookable' => 1,
            'price' => 7.5
        ]);
    }
}
