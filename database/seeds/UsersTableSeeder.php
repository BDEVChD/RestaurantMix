<?php

use Illuminate\Database\Seeder;

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
            'fname' => 'Billy',
            'lname' => 'Giles',
            'email' => 'bgiles@gmail.com',
            'password' => Hash::make('password123'),
        ]);
        DB::table('users')->insert([
            'fname' => 'Cindy',
            'lname' => 'Quaid',
            'email' => 'Cindy@gmail.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
