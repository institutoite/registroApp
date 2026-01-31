<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email','talleres@gmail.com')->exists()) {
            User::create([
                'name' => 'talleres',
                'email' => 'talleres@gmail.com',
                'password' => Hash::make('*lobacude1326*'), //cambia 'password' por tu contraseña preferida
                'email_verified_at' => now(),
            ]);
        }
    }
}
