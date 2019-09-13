<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_food')->truncate();
        DB::table('category_food')->insert([
            ['food_id' => 1, 'category_id' => 2],
            ['food_id' => 2, 'category_id' => 3],
            ['food_id' => 5, 'category_id' => 7],
            ['food_id' => 1, 'category_id' => 1],
            ['food_id' => 1, 'category_id' => 9],
            ['food_id' => 3, 'category_id' => 8],
            ['food_id' => 2, 'category_id' => 1],
            ['food_id' => 2, 'category_id' => 6],
            ['food_id' => 2, 'category_id' => 8],
            ['food_id' => 2, 'category_id' => 9],
            ['food_id' => 1, 'category_id' => 5],
            ['food_id' => 7, 'category_id' => 8]
        ]);
    }
}
