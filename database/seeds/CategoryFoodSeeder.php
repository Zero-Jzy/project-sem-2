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
            ['food_id' => 1, 'category_id' => 3],
            ['food_id' => 2, 'category_id' => 1],
            ['food_id' => 2, 'category_id' => 3],
            ['food_id' => 2, 'category_id' => 5],
            ['food_id' => 3, 'category_id' => 1],
            ['food_id' => 4, 'category_id' => 1],
            ['food_id' => 4, 'category_id' => 3],
            ['food_id' => 4, 'category_id' => 7],
            ['food_id' => 5, 'category_id' => 1],
            ['food_id' => 5, 'category_id' => 3],
            ['food_id' => 5, 'category_id' => 7],
            ['food_id' => 6, 'category_id' => 1],
            ['food_id' => 6, 'category_id' => 3],
            ['food_id' => 6, 'category_id' => 5],
            ['food_id' => 6, 'category_id' => 7],
            ['food_id' => 7, 'category_id' => 1],
            ['food_id' => 7, 'category_id' => 3],
            ['food_id' => 7, 'category_id' => 5],
            ['food_id' => 8, 'category_id' => 3],
            ['food_id' => 8, 'category_id' => 4],
            ['food_id' => 9, 'category_id' => 3],
            ['food_id' => 10, 'category_id' => 3],
            ['food_id' => 10, 'category_id' => 5],
            ['food_id' => 11, 'category_id' => 3],
            ['food_id' => 11, 'category_id' => 6],
            ['food_id' => 11, 'category_id' => 7],
            ['food_id' => 12, 'category_id' => 1],
            ['food_id' => 12, 'category_id' => 7],
            ['food_id' => 13, 'category_id' => 1],
            ['food_id' => 14, 'category_id' => 3],
            ['food_id' => 14, 'category_id' => 6],
            ['food_id' => 14, 'category_id' => 7],
            ['food_id' => 15, 'category_id' => 3],
            ['food_id' => 15, 'category_id' => 4],
            ['food_id' => 15, 'category_id' => 6],
            ['food_id' => 16, 'category_id' => 3],
            ['food_id' => 16, 'category_id' => 4],
            ['food_id' => 17, 'category_id' => 1],
            ['food_id' => 17, 'category_id' => 3],
            ['food_id' => 17, 'category_id' => 6],
            ['food_id' => 17, 'category_id' => 7],
            ['food_id' => 18, 'category_id' => 1],
            ['food_id' => 18, 'category_id' => 3],
            ['food_id' => 18, 'category_id' => 6],
            ['food_id' => 18, 'category_id' => 7],
            ['food_id' => 19, 'category_id' => 3],
            ['food_id' => 19, 'category_id' => 6],
            ['food_id' => 20, 'category_id' => 1],
            ['food_id' => 20, 'category_id' => 3],
            ['food_id' => 21, 'category_id' => 3],
            ['food_id' => 22, 'category_id' => 1],
            ['food_id' => 22, 'category_id' => 3],
            ['food_id' => 22, 'category_id' => 7],
            ['food_id' => 23, 'category_id' => 3],
            ['food_id' => 23, 'category_id' => 6],
            ['food_id' => 24, 'category_id' => 1],
            ['food_id' => 24, 'category_id' => 3],
            ['food_id' => 25, 'category_id' => 1],
            ['food_id' => 25, 'category_id' => 3],
            ['food_id' => 25, 'category_id' => 7],
            ['food_id' => 26, 'category_id' => 3],
            ['food_id' => 26, 'category_id' => 7],
            ['food_id' => 27, 'category_id' => 3],
            ['food_id' => 27, 'category_id' => 4],
            ['food_id' => 27, 'category_id' => 6],
            ['food_id' => 27, 'category_id' => 7],
            ['food_id' => 28, 'category_id' => 3],
            ['food_id' => 28, 'category_id' => 4],
            ['food_id' => 28, 'category_id' => 5],
            ['food_id' => 28, 'category_id' => 6],
            ['food_id' => 29, 'category_id' => 3],
            ['food_id' => 29, 'category_id' => 4],
            ['food_id' => 29, 'category_id' => 6],
            ['food_id' => 29, 'category_id' => 5],
            ['food_id' => 30, 'category_id' => 3],
            ['food_id' => 30, 'category_id' => 4],
            ['food_id' => 30, 'category_id' => 5],
            ['food_id' => 30, 'category_id' => 6],
            ['food_id' => 31, 'category_id' => 1],
            ['food_id' => 31, 'category_id' => 3],



        ]);
    }
}