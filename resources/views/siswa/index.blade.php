@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
<div class="flex flex-col items-center justify-center mt-8 mx-auto px-6 space-y-4 ">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Daftar Siswa</h1>

    <div class="mb-4">
        <a href="{{ route('siswa.create') }}"
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition">
            + Tambah Siswa
        </a>
    </div>

    <div class="mb-6">
        <form method="GET" action="{{ route('siswa.index') }}" class="flex items-center gap-4">
            <label for="kelas_id" class="text-gray-700 font-semibold">Pilih Kelas:</label>
            <select name="kelas_id" id="kelas_id"
                class="border border-gray-300 rounded-md px-4 py-2 shadow-sm focus:ring focus:ring-blue-300"
                onchange="this.form.submit()">
                <option value="">-- Pilih Kelas --</option>
                @foreach($kelasList as $kelas)
                <option value="{{ $kelas->id }}" {{ $kelas->id == $kelasId ? 'selected' : '' }}>
                    {{ $kelas->nama }}
                </option>
                @endforeach
            </select>
        </form>
    </div>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <table class="min-w-full border border-gray-200">
            <thead class="bg-blue-700 text-white">
                <tr>
                    <th class="py-3 px-4 text-left">Nama Siswa</th>
                    <th class="py-3 px-4 text-left">Kelas</th>
                    <th class="py-3 px-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($siswa as $s)
                <tr class="hover:bg-gray-100 transition">
                    <td class="py-3 px-4">{{ $s->nama }}</td>
                    <td class="py-3 px-4">{{ $s->kelas->nama }}</td>
                    <td class="py-3 px-4 text-center flex justify-center gap-2">
                       
                        <a href="{{ route('siswa.edit', $s->id) }}">
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>

                        </a>

                       
                        <form action="{{ route('siswa.destroy', $s->id) }}" method="POST">
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