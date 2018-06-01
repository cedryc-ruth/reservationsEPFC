<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'login' => 'bob',
            'firstname' => 'Bob',
            'lastname' => 'Sull',
            'langue' => 'fr',
            'email' => 'bob@sull.com',
            'password' => bcrypt('colibri'),
            'role_id' => '1',
        ]);
        
        DB::table('users')->insert([
            'login' => 'bobette',
            'firstname' => 'Bobette',
            'lastname' => 'Sull',
            'langue' => 'nl',
            'email' => 'bobette@sull.com',
            'password' => bcrypt('colibri'),
            'role_id' => '2',
        ]);
    }
}
