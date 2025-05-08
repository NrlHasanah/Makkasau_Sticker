<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User admin default
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'makkasausticker@gmail.com',
            'password' => Hash::make('123456'), // selalu hash password!
            'is_admin' => true, // pastikan field ini ada di tabel users
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}