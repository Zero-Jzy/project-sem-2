<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetCategorySeeder extends Seeder
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

            ['id' => 1, 'name' => 'demo', 'description' => 'demo']

        ]);
    }
}
