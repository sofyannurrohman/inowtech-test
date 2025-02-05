@extends('layouts.app')

@section('title', 'Edit Kelas')

@section('content')
<div class="flex flex-col items-center justify-center mt-8 bg-gray-100 p-6">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-lg p-6">
        <a href="{{ route('kelas.index') }}" class="flex mb-8 items-center text-blue-600 hover:text-blue-800 font-semibold">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali ke Daftar Kelas
        </a>
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Kelas</h1>
        <form method="POST" action="{{ route('kelas.update', $kelas->id) }}">
            @csrf
            @method('PUT')
            <label class="block text-gray-700 font-semibold mb-2">Nama Kelas</label>
            <input type="text" name="nama" value="{{ $kelas->nama }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300 mb-4"
                placeholder="Nama Kelas">
            <button class="w-full bg-green-600 hover:bg-green-700 text-white font-bold mt-4 py-2 px-4 rounded-lg shadow-md transition">
                Simpan Perubahan
            </button>
        </form>
    </div>
</div>
@endsection