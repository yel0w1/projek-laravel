<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@arsipupt.com'],
            [
                'name' => 'Administrator',
                'password' => 'Admin12345',
                'role' => 'admin',
            ]
        );
    }
}