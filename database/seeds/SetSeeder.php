<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sets')->truncate();
        DB::table('sets')->insert([
            [
                'id'=>1,
                'name'=>'',
                'categogy_id'=>'',
                'image'=>'',
            ]
        ]);
    }
}
