<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = storage_path() . "/json/addresses_pj_sem_2.json";
        $addresses = json_decode(file_get_contents($path), true);
        DB::table('addresses')->truncate();
        DB::table('addresses')->insert($addresses);
    }
}
