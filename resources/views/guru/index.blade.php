@extends('layouts.app')

@section('title', 'Daftar Guru')

@section('content')
<div class="flex flex-col items-center justify-center bg-gray-100 p-6 mt-8">
 
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Daftar Guru</h1>

    <a href="{{ route('guru.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg mb-6 shadow-md transition">
        + Tambah Guru
    </a>

    <form method="GET" action="{{ route('guru.index') }}" class="mb-6">
        <label for="kelas_id" class="text-gray-700 font-semibold mr-2">Pilih Kelas:</label>
        <select name="kelas_id" id="kelas_id" onchange="this.form.submit()"
            class="px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300">
            <option value="">-- Pilih Kelas --</option>
            @foreach($kelasList as $kelas)
            <option value="{{ $kelas->id }}" {{ $kelas->id == $kelasId ? 'selected' : '' }}>
                {{ $kelas->nama }}
            </option>
            @endforeach
        </select>
    </form>

    <div class="overflow-x-auto w-full max-w-4xl">
        <table class="w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">Nama Guru</th>
                    <th class="px-6 py-3 text-left">Kelas</th>
                    <th class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($guru as $g)
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 text-gray-800">{{ $g->nama }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ $g->kelas->nama }}</td>
                    <td class="px-6 py-4 text-center flex justify-center space-x-3">
                        <a href="{{ route('guru.edit', $g->id) }}" class="text-yellow-500 hover:text-yellow-700">
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>
                        </a>
                        <form action="{{ route('guru.destroy', $g->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--trash] size-5"></span></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection