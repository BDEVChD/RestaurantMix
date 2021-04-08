<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => 'Billy Burger is a chain of hamburger and food restaurants specializing in gourmet quality.',
            'keywords' => 'Burgers, Local Burgers, Gourmet, Billy, Salads, Best Burger', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        
        ]);
    }
}
