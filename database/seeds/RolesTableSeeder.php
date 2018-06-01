<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['admin', 'membre', 'vip'];
        
        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'role' => $role,
            ]);
        }
    }
}
