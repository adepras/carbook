<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 0,
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'role' => 'admin',
            ],
            [
                'id' => 1,
                'name' => 'Pengguna',
                'email' => 'pengguna@example.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'role' => 'user',
            ],
        ]);
    }
}
