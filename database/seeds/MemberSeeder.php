<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; 

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'Judy',
            'lname' => 'Jordan',
            'email' => 'Arcane@gmail.com',
            'phone_number' => '8273949194',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        
        ]);
    }
}
