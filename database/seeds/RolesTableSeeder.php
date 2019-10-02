<?php

use Illuminate\Database\Seeder;

/**
 * Class RolesTableSeeder
 */
class RolesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name'       => 'SuperAdmin',
            'guard_name' => 'web'
        ]);
    }
}
