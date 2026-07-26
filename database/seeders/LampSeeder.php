<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lamp;

class LampSeeder extends Seeder
{
    public function run(): void
    {
        Lamp::insert([
            [
                'nama_lampu' => 'Lampu Taman',
                'lokasi' => 'Taman',
                'status_lampu' => 'nyala',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lampu' => 'Lampu Parkiran',
                'lokasi' => 'Parkiran',
                'status_lampu' => 'mati',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lampu' => 'Lampu Koridor',
                'lokasi' => 'Koridor',
                'status_lampu' => 'nyala',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}