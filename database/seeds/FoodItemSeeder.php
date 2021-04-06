<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Texas Burger Tower',
            'description' => 'BEANS BEANS TOMATO TOMATO', 
            'image_url' => '/img/hamburger-and-fries-png-4.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        
        ]);

        DB::table('food_items')->insert([
            'title' => 'Barbeque Wedge Explosion',
            'description' => 'So Many Wedges, Youll Wonder Where You End and the Meal Begins', 
            'image_url' => '/img/hamburger-and-fries-png-4.png',
            'price' => 3.41,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        
        ]);
    }
}
