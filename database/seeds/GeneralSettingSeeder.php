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
            'logo_image_url' => '/img/clipart-restaurant-restaurant-logo-5.png', 
            'address_1' => '52 Main Street',
            'address_2'=> 'Suite 217', 
            'city' => 'New York',
            'state' => 'NY',
            'zipcode' => '20301',
            'phone_number' => '292-928-7789',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        
        ]);

       

    }
}






