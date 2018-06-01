<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            LocalitiesTableSeeder::class,
            UsersTableSeeder::class,
            LocationsTableSeeder::class,
            ShowsTableSeeder::class,
            RepresentationsTableSeeder::class,
            RepresentationUserTableSeeder::class,
        ]);
    }
}
