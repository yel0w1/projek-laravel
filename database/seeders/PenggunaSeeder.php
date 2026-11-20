<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class PenggunaSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'pengguna@arsipupt.com'],
            [
                'name' => 'Pengguna UPT',
                'password' => 'Pengguna123',
                'role' => 'pengguna',
            ]
        );
    }
}