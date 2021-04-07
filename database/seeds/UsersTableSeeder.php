<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        
        ]);
        DB::table('users')->insert([
            'fname' => 'Cindy',
            'lname' => 'Quaid',
            'email' => 'Cindy@gmail.com',
            'password' => Hash::make('password123'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
