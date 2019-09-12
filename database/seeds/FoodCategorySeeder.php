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

            ['id' => 1, 'name' => 'Vegetables'],

            ['id' => 2, 'name' => 'Desserts'],

            ['id' => 3, 'name' => 'Protein Food'],

            ['id' => 4, 'name' => 'Barbecue'],

            ['id' => 5, 'name' => 'Soups and stews‎'],

            ['id' => 6, 'name' => 'Fried foods‎'],

            ['id' => 7, 'name' => 'Boiled food'],

            ['id' => 8, 'name' => 'Drinks']



        ]);

    }
}
