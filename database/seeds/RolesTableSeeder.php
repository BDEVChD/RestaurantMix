<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //created users
        DB::table('roles')->insert([
            'title' => 'Admin'
        ]);
           
        DB::table('roles')->insert([
            'title' => 'Employee'
        ]);

        //here we assign each user a role
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1
        ]);
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 2
        ]);
    }
}
