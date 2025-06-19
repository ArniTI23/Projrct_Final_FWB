<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Admin',
            'kata_sandi' => bcrypt('admin123'),
            'role' => 'admin',
        ]);
        User::create([
            'nama' => 'Kurir',
            'kata_sandi' => bcrypt('kurir123'),
            'role' => 'kurir',
        ]);
        User::create([
            'nama' => 'Customer',
            'kata_sandi' => bcrypt('customer123'),
            'role' => 'customer',
        ]);
    }
}
