@extends('layouts.app')

@section('title', 'Edit Guru')

@section('content')
<div class="flex flex-col items-center justify-center bg-gray-100 p-6">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-lg p-6">
        <a href="{{ route('guru.index') }}" class="flex mb-8 items-center text-blue-600 hover:text-blue-800 font-semibold">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali ke Daftar Guru
        </a>
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Form Edit Guru</h1>

        @if ($errors->any())
        <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded">
            <strong>Terjadi kesalahan:</strong>
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('guru.update', $guru->id) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Nama Guru</label>
                <input
                    type="text"
                    name="nama"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-500 @error('nama') border-red-500 @enderror"
                    value="{{ old('nama', $guru->nama) }}"
                    placeholder="Nama Guru"
                    required>

            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Choose Class</label>
                <select
                    name="kelas_id"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-500 @error('kelas_id') border-red-500 @enderror">
                    <option value="">-- Choose Class --</option>
                    @foreach($kelas as $k)
                    <option value="{{ $k->id }}" {{ old('kelas_id', $guru->kelas_id) == $k->id ? 'selected' : '' }}>{{ $k->nama }}</option>
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