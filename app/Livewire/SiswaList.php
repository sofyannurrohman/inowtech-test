<?php

use Livewire\Component;
use App\Models\Siswa;
use App\Models\Kelas;

class SiswaList extends Component
{
    public $kelas_id; 
    public $kelasList;

    public function mount()
    {
        $this->kelasList = Kelas::all(); 
    }

    public function render()
    {
        $siswas = Siswa::when($this->kelas_id, function ($query) {
            return $query->where('kelas_id', $this->kelas_id);
        })->with('kelas')->get();

        return view('livewire.siswa-list', compact('siswas'));
    }
}