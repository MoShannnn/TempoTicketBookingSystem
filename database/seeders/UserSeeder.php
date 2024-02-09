<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert a default user into the 'users' table
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('superuser'), // Change 'yourpassword' to your desired password
            'role' => 'admin',
            'current_team_id' => null,
            'profile_photo_path' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // You can add more users if needed
    }
}
