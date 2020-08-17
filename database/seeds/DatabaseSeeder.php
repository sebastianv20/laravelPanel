<?php

use App\User;
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
        User::create(['name' => 'test','email' => 'test@test.com','password' => '$2y$12$rx.W/3pUutNhqhv2S6Vg6uWQzVodNyCZrbYZWp5A5ucYTR0C3yC86']);
    }
}
