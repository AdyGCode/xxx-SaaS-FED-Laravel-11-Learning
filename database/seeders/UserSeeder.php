<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedUsers = [
            [
                'id' => 100,
                'given_name' => 'Admin',
                'family_name' => 'Istrator',
                'nickname' => 'Admin',
                'email' => 'admin@example.com',
                'password' => 'Password1',
            ],
            [
                'id' => 500,
                'given_name' => 'Staff',
                'family_name' => 'Member',
                'nickname' => 'Staff',
                'email' => 'staff@example.com',
                'password' => 'Password1',
            ],
            [
                'id' => 1000,
                'given_name' => 'Eileen',
                'family_name' => 'Dover',
                'nickname' => 'Cliffwalker',
                'email' => 'eileen@example.com',
                'password' => 'Password1',
            ],

        ];

        foreach ($seedUsers as $seedUser) {
            User::create($seedUser);
        }

        //        User::factory()->create([
        //            'name' => 'Test User',
        //            'email' => 'test@example.com',
        //        ]);

        // User::factory(10)->create();

    }
}
