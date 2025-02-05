<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::create(['nama' => 'Sofyan', 'kelas_id' => 1]);
        Siswa::create(['nama' => 'Budi', 'kelas_id' => 2]);
    }
}
