<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dish_categories')->truncate();
        DB::table('dish_categories')->insert([
            ['id' => 1, 'name' => 'water','description' => 'cái này tạm thời ghi vớ vẩn cũng đc'],
            ['id' => 2, 'name' => 'cái gì đó..','description' => 'cái này tạm thời ghi vớ vẩn cũng đc'],
        ]);
    }
}
