<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_set')->truncate();
        DB::table('food_set')->insert([

//            ['set_id' => 1, 'food_id' => 2],
//            ['set_id' => 1, 'food_id' => 1],
//            ['set_id' => 1, 'food_id' => 3]
            ['set_id' => 1, 'food_id' => 1],
            ['set_id' => 1, 'food_id' => 3],
            ['set_id' => 1, 'food_id' => 8],

            ['set_id' => 2, 'food_id' => 1],
            ['set_id' => 2, 'food_id' => 9],
            ['set_id' => 2, 'food_id' => 5],

            ['set_id' => 3, 'food_id' => 1],
            ['set_id' => 3, 'food_id' => 10],
            ['set_id' => 3, 'food_id' => 3],

            ['set_id' => 4, 'food_id' => 1],
            ['set_id' => 4, 'food_id' => 11],

            ['set_id' => 5, 'food_id' => 1],
            ['set_id' => 5, 'food_id' => 2],
            ['set_id' => 5, 'food_id' => 12],

            ['set_id' => 6, 'food_id' => 1],
            ['set_id' => 6, 'food_id' => 4],
            ['set_id' => 6, 'food_id' => 15],

            ['set_id' => 7, 'food_id' => 1],
            ['set_id' => 7, 'food_id' => 13],
            ['set_id' => 7, 'food_id' => 15],

            ['set_id' => 8, 'food_id' => 1],
            ['set_id' => 8, 'food_id' => 16],
            ['set_id' => 8, 'food_id' => 4],

            ['set_id' => 9, 'food_id' => 1],
            ['set_id' => 9, 'food_id' => 4],
            ['set_id' => 9, 'food_id' => 17],

            ['set_id' => 10, 'food_id' => 1],
            ['set_id' => 10, 'food_id' => 18],

            ['set_id' => 11, 'food_id' => 1],
            ['set_id' => 11, 'food_id' => 5],
            ['set_id' => 11, 'food_id' => 19],
            ['set_id' => 11, 'food_id' => 6],
            ['set_id' => 11, 'food_id' => 20],

            ['set_id' => 12, 'food_id' => 21],
            ['set_id' => 12, 'food_id' => 16],

            ['set_id' => 13, 'food_id' => 21],
            ['set_id' => 13, 'food_id' => 13],
            ['set_id' => 13, 'food_id' => 22],

            ['set_id' => 14, 'food_id' => 1],
            ['set_id' => 14, 'food_id' => 3],
            ['set_id' => 14, 'food_id' => 31],

            ['set_id' => 15, 'food_id' => 21],
            ['set_id' => 15, 'food_id' => 23],
            ['set_id' => 15, 'food_id' => 24],
            ['set_id' => 15, 'food_id' => 4],
            ['set_id' => 15, 'food_id' => 25],

            ['set_id' => 16, 'food_id' =>1 ],
            ['set_id' => 16, 'food_id' => 12],
            ['set_id' => 16, 'food_id' => 23],
            ['set_id' => 16, 'food_id' => 14],

            ['set_id' => 17, 'food_id' => 1],
            ['set_id' => 17, 'food_id' => 23],
            ['set_id' => 17, 'food_id' => 26],
            ['set_id' => 17, 'food_id' => 27],

            ['set_id' => 18, 'food_id' => 1],
            ['set_id' => 18, 'food_id' => 23],
            ['set_id' => 18, 'food_id' => 28],

            ['set_id' => 19, 'food_id' => 1],
            ['set_id' => 19, 'food_id' => 29],
            ['set_id' => 19, 'food_id' => 3],
            ['set_id' => 19, 'food_id' => 14],

            ['set_id' => 20, 'food_id' => 1],
            ['set_id' => 20, 'food_id' => 19],
            ['set_id' => 20, 'food_id' => 14],
            ['set_id' => 20, 'food_id' => 7],

            ['set_id' => 21, 'food_id' => 1],
            ['set_id' => 21, 'food_id' => 14],
            ['set_id' => 21, 'food_id' => 3],
            ['set_id' => 21, 'food_id' => 30],
        ]);
    }
}
