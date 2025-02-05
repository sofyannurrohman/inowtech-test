@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')
<div class="flex flex-col items-center justify-center mt-8 bg-gray-100 p-6">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-lg p-6">
        
        <a href="{{ route('siswa.index') }}" class="flex mb-8 items-center text-blue-600 hover:text-blue-800 font-semibold">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali ke Daftar Siswa
        </a>

        <h1 class="text-3xl font-bold text-gray-800 mb-6">Form Tambah Siswa</h1>

        <form method="POST" action="{{ route('siswa.store') }}">
            @csrf
            <label class="block text-gray-700 font-semibold mb-2">Nama Siswa</label>
            <input type="text" name="nama"
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300 mb-4"
                placeholder="Nama Siswa" required>

            <label class="block text-gray-700 font-semibold mb-2">Pilih Kelas</label>
            <select name="kelas_id"
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300 mb-4" required>
                <option value="" disabled selected>-- Pilih Kelas --</option>
                @foreach($kelas as $k)
                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                @endforeach
            </select>

            <button class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4  mt-4 rounded-lg shadow-md transition">
                Simpan
            </button>
        </form>
    </div>
</div>
@endsection