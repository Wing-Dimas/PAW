<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function GuzzleHttp\Promise\each;

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
        // User::create([
        //     "email" => "admin@example.com",
        //     "username" => "silverlink",
        //     "password" => Hash::make("password"),
        //     "role" => "admin"
        // ]);

        collect([
            [
                "email" => "admin@example.com",
                "username" => "silverlink",
                "password" => Hash::make("password"),
                "role" => "admin"
            ],
            [
                "email" => "staff@example.com",
                "username" => "bluelink",
                "password" => Hash::make("password"),
                "role" => "staff"
            ],
            [
                "email" => "studentf@example.com",
                "username" => "greenlink",
                "password" => Hash::make("password"),
                "role" => "student"
            ],
        ])->each(function($item, $key){
            User::create($item);
        });
    }
}
