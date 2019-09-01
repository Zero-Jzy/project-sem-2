<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = storage_path() . "/json/users_data.json";
        $users = json_decode(file_get_contents($path), true);
        DB::table('users')->truncate();
        DB::table('users')->insert([]);
    }
}
