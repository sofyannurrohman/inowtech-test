<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan kelas_id dari request
        $kelasId = $request->input('kelas_id');

        // Mengambil semua kelas untuk dropdown
        $kelasList = Kelas::all();

        // Filter data siswa berdasarkan kelas yang dipilih
        $siswa = $kelasId
            ? Siswa::where('kelas_id', $kelasId)->get()  // jika kelas_id ada, filter siswa berdasarkan kelas_id
            : Siswa::all();  // jika kelas_id kosong, tampilkan semua siswa

        return view('siswa.index', compact('siswa', 'kelasList', 'kelasId'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('siswa.create', compact('kelas'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas_id' => 'required'
        ]);
        Siswa::create($request->all());
        return redirect()->back()->with('success', 'Siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $kelas = Kelas::all();
        return view('siswa.edit', compact('siswa', 'kelas'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id'
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->back()->with('success', 'Siswa berhasil dihapus.');
    }
}
