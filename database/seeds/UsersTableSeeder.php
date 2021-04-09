<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker; 
use Illuminate\Support\Facades\Hash;

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
        // DB::table('users')->insert([
        //     'fname' => 'Cindy',
        //     'lname' => 'Quaid',
        //     'email' => 'Cindy@gmail.com',
        //     'password' => Hash::make('password123'),
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now()
        // ]);
        
        $faker = Faker::create(); 

        foreach(range(1,20) as $index){
            DB::table('users')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'password' => Hash::make('12345678'),
                'updated_at' => $faker->dateTimeThisMonth('now', 'America/New_York'),
                'created_at' => $faker->dateTimeThisMonth('now', 'America/New_York')
            
            ]);
        }
    }
}
