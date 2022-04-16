<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make("123123123"),
            "role" => "admin",
            "status" => 1,
        ]);

        User::create([
            'name' => "Customer",
            'email' => "customer@gmail.com",
            'password' => Hash::make("123123123"),
            "role" => "customer",
            "status" => 1,
        ]);

    }
}
