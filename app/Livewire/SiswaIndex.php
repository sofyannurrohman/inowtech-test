<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Support\Facades\Log;

class SiswaIndex extends Component
{
    public $nama, $kelas_id, $siswa_id;
    public $siswas, $kelases, $filterKelas = '';

    public function render()
    {
        $this->kelases = Kelas::all();
        $this->siswas = Siswa::when($this->filterKelas, function ($query) {
            return $query->where('kelas_id', $this->filterKelas);
        })->get();

        return view('livewire.siswa-index');
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'kelas_id' => 'required'
        ]);

        Siswa::create([
            'nama' => $this->nama,
            'kelas_id' => $this->kelas_id
        ]);

        $this->reset(['nama', 'kelas_id']);
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $this->siswa_id = $siswa->id;
        $this->nama = $siswa->nama;
        $this->kelas_id = $siswa->kelas_id;
    }

    public function update()
    {
        $this->validate([
            'nama' => 'required',
            'kelas_id' => 'required'
        ]);

        Siswa::where('id', $this->siswa_id)->update([
            'nama' => $this->nama,
            'kelas_id' => $this->kelas_id
        ]);

        $this->reset(['nama', 'kelas_id', 'siswa_id']);
    }

    public function delete($id)
    {
        Siswa::destroy($id);
    }
}