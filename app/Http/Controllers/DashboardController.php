<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil data siswa, guru, dan kelas
        $siswa = Siswa::all();
        $guru = Guru::all();
        $kelas = Kelas::all();

        return view('dashboard.index', compact('siswa', 'guru', 'kelas'));
    }
}
