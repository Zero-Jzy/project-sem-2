<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('set_categories')->truncate();
        DB::table('set_categories')->insert([
            ['id' => 1, 'name' => 'ration for fat people', 'description' => 'Meals will help you provide the necessary nutrients and lose a lot of weight when you apply. 
            Providing enough calories does not make you feel anxious or too hungry in each meal, 
            to avoid the situation. indigestion or appetite, and does not improve the desired weight'],
            ['id' => 2, 'name' => 'ration for thin people', 'description' => 'Meals will help you provide the necessary nutrients. Increase weight to match your weight height'],
            ['id' => 3, 'name' => 'ration for office workers', 'description' => 'ration provides all the necessary nutrients for a stressful, tired working day'],
        ]);
    }
}
