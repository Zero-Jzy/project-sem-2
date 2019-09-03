<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dish_set')->truncate();
        DB::table('dish_set')->insert([
            ['set_id' => 1, 'dish_id' => 2],
            ['set_id' => 1, 'dish_id' => 1],
            ['set_id' => 1, 'dish_id' => 3]
        ]);
    }
}
