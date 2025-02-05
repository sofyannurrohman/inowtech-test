@extends('layouts.app')

@section('title', 'Tambah Guru')

@section('content')
<div class="flex flex-col items-center justify-center mt-11 bg-gray-100 p-6">

    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg">
        <a href="{{ route('guru.index') }}" class="flex mb-8 items-center text-blue-600 hover:text-blue-800 font-semibold">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali ke Daftar Guru
        </a>
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Form Tambah Guru</h1>
        <form method="POST" action="{{ route('guru.store') }}" class="space-y-8">
            @csrf
            <div>
                <label class="block text-gray-700 font-semibold">Nama Guru</label>
                <input type="text" name="nama" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-500" placeholder="Masukkan Nama Guru" required>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Pilih Kelas</label>
                <select name="kelas_id" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-500">
                    @foreach($kelas as $k)
                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-md shadow-md transition">
                Simpan
            </button>
        </form>
    </div>
</div>
@endsection