<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::create(['nama' => 'Pak Budi', 'kelas_id' => 1]);
        Guru::create(['nama' => 'Bu Siti', 'kelas_id' => 2]);
    }
}
