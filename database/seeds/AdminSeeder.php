<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'dekujzy@gmail.com',
            'avatar' => 'https://i.pinimg.com/564x/d3/94/e9/d394e9c43b5f6a3e8402db3903d8635f.jpg'
            ]);
    }
}
