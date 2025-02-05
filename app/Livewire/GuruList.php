<?php

use Livewire\Component;
use App\Models\Guru;
use App\Models\Kelas;

class GuruList extends Component
{
    public $kelas_id;
    public $kelasList;

    public function mount()
    {
        $this->kelasList = Kelas::all();
    }

    public function render()
    {
        
        $gurus = Guru::when($this->kelas_id, function ($query) {
            return $query->where('kelas_id', $this->kelas_id);
        })->with('kelas')->get();

        return view('livewire.guru-list', compact('gurus'));
    }
}