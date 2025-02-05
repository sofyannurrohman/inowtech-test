<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
            // Mendapatkan kelas_id dari request
            $kelasId = $request->input('kelas_id');
    
            // Mengambil semua kelas untuk dropdown
            $kelasList = Kelas::all();
    
            // Filter data guru berdasarkan kelas yang dipilih
            $guru = $kelasId
                ? Guru::where('kelas_id', $kelasId)->get()  // jika kelas_id ada, filter guru berdasarkan kelas_id
                : Guru::all();  // jika kelas_id kosong, tampilkan semua guru
    
            return view('guru.index', compact('guru', 'kelasList', 'kelasId'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('guru.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas_id' => 'required'
        ]);
        Guru::create($request->all());
        return redirect()->back()->with('success', 'Guru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guru = Guru::findOrFail($id);
        $kelas = Kelas::all();
        return view('guru.edit', compact('guru', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id'
        ]);

        $guru = Guru::findOrFail($id);
        $guru->update($request->all());

        return redirect()->route('guru.index')->with('success', 'Guru berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Guru::destroy($id);
        return redirect()->back()->with('success', 'Guru berhasil dihapus.');
    }
}
