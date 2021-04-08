<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('general_settings')->insert([
            'site_title' => 'Billy Burger',
            'logo_image_url' => '/img/hamburger-and-fries-png-4.png', 
            'address_1' => '29 main street',
            'address_2'=> '2 main street', 
            'city' => 'new york',
            'state' => 'NY',
            'zipcode' => '20301',
            'phone_number' => '2929281819',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        
        ]);

       

    }
}






