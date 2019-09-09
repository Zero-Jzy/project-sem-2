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
        DB::table('food_set')->insert(
            array (
                0 =>
                    array (
                        'set_id' => 1,
                        'food_id' => 1,
                        'quantity' => 1,
                    ),
                1 =>
                    array (
                        'set_id' => 1,
                        'food_id' => 3,
                        'quantity' => 3,
                    ),
                2 =>
                    array (
                        'set_id' => 1,
                        'food_id' => 8,
                        'quantity' => 2,
                    ),
                3 =>
                    array (
                        'set_id' => 2,
                        'food_id' => 1,
                        'quantity' => 3,
                    ),
                4 =>
                    array (
                        'set_id' => 2,
                        'food_id' => 9,
                        'quantity' => 1,
                    ),
                5 =>
                    array (
                        'set_id' => 2,
                        'food_id' => 5,
                        'quantity' => 2,
                    ),
                6 =>
                    array (
                        'set_id' => 3,
                        'food_id' => 1,
                        'quantity' => 3,
                    ),
                7 =>
                    array (
                        'set_id' => 3,
                        'food_id' => 10,
                        'quantity' => 1,
                    ),
                8 =>
                    array (
                        'set_id' => 3,
                        'food_id' => 3,
                        'quantity' => 3,
                    ),
                9 =>
                    array (
                        'set_id' => 4,
                        'food_id' => 1,
                        'quantity' => 3,
                    ),
                10 =>
                    array (
                        'set_id' => 4,
                        'food_id' => 11,
                        'quantity' => 3,
                    ),
                11 =>
                    array (
                        'set_id' => 5,
                        'food_id' => 1,
                        'quantity' => 3,
                    ),
                12 =>
                    array (
                        'set_id' => 5,
                        'food_id' => 2,
                        'quantity' => 1,
                    ),
                13 =>
                    array (
                        'set_id' => 5,
                        'food_id' => 12,
                        'quantity' => 3,
                    ),
                14 =>
                    array (
                        'set_id' => 6,
                        'food_id' => 1,
                        'quantity' => 1,
                    ),
                15 =>
                    array (
                        'set_id' => 6,
                        'food_id' => 4,
                        'quantity' => 2,
                    ),
                16 =>
                    array (
                        'set_id' => 6,
                        'food_id' => 15,
                        'quantity' => 1,
                    ),
                17 =>
                    array (
                        'set_id' => 7,
                        'food_id' => 1,
                        'quantity' => 1,
                    ),
                18 =>
                    array (
                        'set_id' => 7,
                        'food_id' => 13,
                        'quantity' => 3,
                    ),
                19 =>
                    array (
                        'set_id' => 7,
                        'food_id' => 15,
                        'quantity' => 2,
                    ),
                20 =>
                    array (
                        'set_id' => 8,
                        'food_id' => 1,
                        'quantity' => 1,
                    ),
                21 =>
                    array (
                        'set_id' => 8,
                        'food_id' => 16,
                        'quantity' => 1,
                    ),
                22 =>
                    array (
                        'set_id' => 8,
                        'food_id' => 4,
                        'quantity' => 2,
                    ),
                23 =>
                    array (
                        'set_id' => 9,
                        'food_id' => 1,
                        'quantity' => 1,
                    ),
                24 =>
                    array (
                        'set_id' => 9,
                        'food_id' => 4,
                        'quantity' => 2,
                    ),
                25 =>
                    array (
                        'set_id' => 9,
                        'food_id' => 17,
                        'quantity' => 1,
                    ),
                26 =>
                    array (
                        'set_id' => 10,
                        'food_id' => 1,
                        'quantity' => 2,
                    ),
                27 =>
                    array (
                        'set_id' => 10,
                        'food_id' => 18,
                        'quantity' => 3,
                    ),
                28 =>
                    array (
                        'set_id' => 11,
                        'food_id' => 1,
                        'quantity' => 3,
                    ),
                29 =>
                    array (
                        'set_id' => 11,
                        'food_id' => 5,
                        'quantity' => 2,
                    ),
                30 =>
                    array (
                        'set_id' => 11,
                        'food_id' => 19,
                        'quantity' => 1,
                    ),
                31 =>
                    array (
                        'set_id' => 11,
                        'food_id' => 6,
                        'quantity' => 1,
                    ),
                32 =>
                    array (
                        'set_id' => 11,
                        'food_id' => 20,
                        'quantity' => 1,
                    ),
                33 =>
                    array (
                        'set_id' => 12,
                        'food_id' => 21,
                        'quantity' => 3,
                    ),
                34 =>
                    array (
                        'set_id' => 12,
                        'food_id' => 16,
                        'quantity' => 3,
                    ),
                35 =>
                    array (
                        'set_id' => 13,
                        'food_id' => 21,
                        'quantity' => 3,
                    ),
                36 =>
                    array (
                        'set_id' => 13,
                        'food_id' => 13,
                        'quantity' => 3,
                    ),
                37 =>
                    array (
                        'set_id' => 13,
                        'food_id' => 22,
                        'quantity' => 3,
                    ),
                38 =>
                    array (
                        'set_id' => 14,
                        'food_id' => 1,
                        'quantity' => 1,
                    ),
                39 =>
                    array (
                        'set_id' => 14,
                        'food_id' => 3,
                        'quantity' => 1,
                    ),
                40 =>
                    array (
                        'set_id' => 14,
                        'food_id' => 31,
                        'quantity' => 2,
                    ),
                41 =>
                    array (
                        'set_id' => 15,
                        'food_id' => 21,
                        'quantity' => 2,
                    ),
                42 =>
                    array (
                        'set_id' => 15,
                        'food_id' => 23,
                        'quantity' => 3,
                    ),
                43 =>
                    array (
                        'set_id' => 15,
                        'food_id' => 24,
                        'quantity' => 2,
                    ),
                44 =>
                    array (
                        'set_id' => 15,
                        'food_id' => 4,
                        'quantity' => 3,
                    ),
                45 =>
                    array (
                        'set_id' => 15,
                        'food_id' => 25,
                        'quantity' => 1,
                    ),
                46 =>
                    array (
                        'set_id' => 16,
                        'food_id' => 1,
                        'quantity' => 3,
                    ),
                47 =>
                    array (
                        'set_id' => 16,
                        'food_id' => 12,
                        'quantity' => 3,
                    ),
                48 =>
                    array (
                        'set_id' => 16,
                        'food_id' => 23,
                        'quantity' => 2,
                    ),
                49 =>
                    array (
                        'set_id' => 16,
                        'food_id' => 14,
                        'quantity' => 3,
                    ),
                50 =>
                    array (
                        'set_id' => 17,
                        'food_id' => 1,
                        'quantity' => 2,
                    ),
                51 =>
                    array (
                        'set_id' => 17,
                        'food_id' => 23,
                        'quantity' => 2,
                    ),
                52 =>
                    array (
                        'set_id' => 17,
                        'food_id' => 26,
                        'quantity' => 1,
                    ),
                53 =>
                    array (
                        'set_id' => 17,
                        'food_id' => 27,
                        'quantity' => 1,
                    ),
                54 =>
                    array (
                        'set_id' => 18,
                        'food_id' => 1,
                        'quantity' => 2,
                    ),
                55 =>
                    array (
                        'set_id' => 18,
                        'food_id' => 23,
                        'quantity' => 1,
                    ),
                56 =>
                    array (
                        'set_id' => 18,
                        'food_id' => 28,
                        'quantity' => 3,
                    ),
                57 =>
                    array (
                        'set_id' => 19,
                        'food_id' => 1,
                        'quantity' => 2,
                    ),
                58 =>
                    array (
                        'set_id' => 19,
                        'food_id' => 29,
                        'quantity' => 3,
                    ),
                59 =>
                    array (
                        'set_id' => 19,
                        'food_id' => 3,
                        'quantity' => 1,
                    ),
                60 =>
                    array (
                        'set_id' => 19,
                        'food_id' => 14,
                        'quantity' => 3,
                    ),
                61 =>
                    array (
                        'set_id' => 20,
                        'food_id' => 1,
                        'quantity' => 1,
                    ),
                62 =>
                    array (
                        'set_id' => 20,
                        'food_id' => 19,
                        'quantity' => 3,
                    ),
                63 =>
                    array (
                        'set_id' => 20,
                        'food_id' => 14,
                        'quantity' => 2,
                    ),
                64 =>
                    array (
                        'set_id' => 20,
                        'food_id' => 7,
                        'quantity' => 2,
                    ),
                65 =>
                    array (
                        'set_id' => 21,
                        'food_id' => 1,
                        'quantity' => 3,
                    ),
                66 =>
                    array (
                        'set_id' => 21,
                        'food_id' => 14,
                        'quantity' => 2,
                    ),
                67 =>
                    array (
                        'set_id' => 21,
                        'food_id' => 3,
                        'quantity' => 3,
                    ),
                68 =>
                    array (
                        'set_id' => 21,
                        'food_id' => 30,
                        'quantity' => 3,
                    ),
            ));
    }
}
