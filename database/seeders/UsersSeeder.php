<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "John Doe",
                "email" => "john@example.com",
                "password" => bcrypt("strong_pass")
            ],
            [
                "name" => "Alice Smith",
                "email" => "alice@example.com",
                "password" => bcrypt("strong_pass")
            ],
            [
                "name" => "Bob Johnson",
                "email" => "bob@example.com",
                "password" => bcrypt("strong_pass")
            ],
            [
                "name" => "Eva Davis",
                "email" => "eva@example.com",
                "password" => bcrypt("strong_pass")
            ],
            [
                "name" => "Chris Wilson",
                "email" => "chris@example.com",
                "password" => bcrypt("strong_pass")
            ],
            [
                "name" => "Sarah Brown",
                "email" => "sarah@example.com",
                "password" => bcrypt("strong_pass")
            ],
            [
                "name" => "Michael Lee",
                "email" => "michael@example.com",
                "password" => bcrypt("strong_pass")
            ],
            [
                "name" => "Emily White",
                "email" => "emily@example.com",
                "password" => bcrypt("strong_pass")
            ],
            [
                "name" => "David Miller",
                "email" => "david@example.com",
                "password" => bcrypt("strong_pass")
            ],
            [
                "name" => "Olivia Moore",
                "email" => "olivia@example.com",
                "password" => bcrypt("strong_pass")
            ]
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
