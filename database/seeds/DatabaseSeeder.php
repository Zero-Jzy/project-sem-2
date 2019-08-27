<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            ProfileSeeder::class
        ]);

        DB::statement("ALTER SEQUENCE users_id_seq RESTART WITH 1001");
        DB::statement("ALTER SEQUENCE profiles_id_seq RESTART WITH 1001");
    }
}
