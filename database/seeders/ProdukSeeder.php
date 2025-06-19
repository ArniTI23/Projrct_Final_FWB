<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::insert([
            [
                'nama' => 'Baju Saratu',
                'deskripsi' => 'Hitam.',
                'stok' => 10,
                'harga' => 250000.00,
                'foto_produk' => 'produk/Hitam.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Baju Saratu',
                'deskripsi' => 'Kuning.',
                'stok' => 10,
                'harga' => 250000.00,
                'foto_produk' => 'produk/Kuning.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Baju Saratu',
                'deskripsi' => 'Biru.',
                'stok' => 10,
                'harga' => 250000.00,
                'foto_produk' => 'produk/Biru.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Baju Saratu',
                'deskripsi' => 'Merah.',
                'stok' => 10,
                'harga' => 250000.00,
                'foto_produk' => 'produk/Merah.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}
