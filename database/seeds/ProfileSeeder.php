<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = storage_path() . "/json/profiles_data.json";
        $profiles = json_decode(file_get_contents($path), true);
        DB::table('profiles')->truncate();
        DB::table('profiles')->insert([]);
    }
}
