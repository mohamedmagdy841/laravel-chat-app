<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Mohamed',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'Magdy',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('123456789'),
            ],

        ]);
    }
}
