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

            ['id' => 1, 'name' => 'Vegetables', 'description' => 'description1'],

            ['id' => 2, 'name' => 'Desserts', 'description' => 'description2'],

//            ['id' => 3, 'name' => 'Protein Food', 'description' => 'description3'],

            ['id' => 4, 'name' => 'Barbecue', 'description' => 'description4'],

//            ['id' => 5, 'name' => 'Soups and stews‎', 'description' => 'description5'],

            ['id' => 6, 'name' => 'Fried', 'description' => 'description6'],

            ['id' => 7, 'name' => 'Boiled', 'description' => 'description7'],

            ['id' => 8, 'name' => 'Drinks', 'description' => 'description8']

        ]);
    }
}
