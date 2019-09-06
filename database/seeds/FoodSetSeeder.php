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
            ['set_id' => 1, 'food_id' => 2],
            ['set_id' => 1, 'food_id' => 1],
            ['set_id' => 1, 'food_id' => 3]
        ]);
    }
}
