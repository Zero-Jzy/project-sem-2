<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->truncate();
        DB::table('food_categories')->insert([

            ['id' => 1, 'name' => 'Vegetables', 'description' =>'description'],

            ['id' => 2, 'name' => 'Desserts', 'description' =>'description'],

            ['id' => 3, 'name' => 'Protein Food', 'description' =>'description'],

            ['id' => 4, 'name' => 'Barbecue', 'description' =>'description'],

            ['id' => 5, 'name' => 'Soups and stews‎', 'description' =>'description'],

            ['id' => 6, 'name' => 'Fried foods‎', 'description' =>'description'],

            ['id' => 7, 'name' => 'Boiled food', 'description' =>'description'],

            ['id' => 8, 'name' => 'Drinks', 'description' =>'description']

        ]);

    }
}
