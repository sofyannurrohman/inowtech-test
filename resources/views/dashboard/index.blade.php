@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')


<div class="my-8 flex justify-center flex-wrap gap-4">
    <a href="{{ route('siswa.index') }}" class="btn bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition">
        Kelola Data Siswa
    </a>
    
    <a href="{{ route('guru.index') }}" class="btn bg-teal-600 hover:bg-teal-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition">
        Kelola Data Guru
    </a>

    <a href="{{ route('kelas.index') }}" class="btn bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition">
        Kelola Data Kelas
    </a>
</div>

<div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-4 shadow-lg rounded-lg">
        <h2 class="text-xl font-semibold mb-4 text-gray-800">Daftar Siswa</h2>
        <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-blue-700 text-white">
                <tr>
                    <th class="px-4 py-2 border text-center">No</th>
                    <th class="px-4 py-2 text-left border">Nama Siswa</th>
                    <th class="px-4 py-2 text-left border">Kelas</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($siswa as $index => $s)
                <tr class="hover:bg-gray-100 transition">
                    <td class="px-4 py-2 border text-center">{{ $index + 1 }}</td>
                    <td class="px-4 py-2 border">{{ $s->nama }}</td>
                    <td class="px-4 py-2 border">{{ $s->kelas->nama }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="bg-white p-4 shadow-lg rounded-lg">
        <h2 class="text-xl font-semibold mb-4 text-gray-800">Daftar Guru</h2>
        <table class="w-full  rounded-lg overflow-hidden">
            <thead class="bg-blue-700 text-white">
                <tr>
                    <th class="px-4 py-2 border text-center">No</th>
                    <th class="px-4 py-2 text-left border">Nama Guru</th>
                    <th class="px-4 py-2 text-left border">Kelas</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($guru as $index => $g)
                <tr class="hover:bg-gray-100 transition">
                    <td class="px-4 py-2 border text-center">{{ $index + 1 }}</td>
                    <td class="px-4 py-2 border">{{ $g->nama }}</td>
                    <td class="px-4 py-2 border">{{ $g->kelas->nama }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

 
    <div class="bg-white p-4 shadow-lg rounded-lg">
        <h2 class="text-xl font-semibold mb-4 text-gray-800">Daftar Kelas</h2>
        <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-blue-700 text-white">
                <tr>
                    <th class="px-4 py-2 border text-center">No</th>
                    <th class="px-4 py-2 text-left border">Nama Kelas</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($kelas as $index => $k)
                <tr class="hover:bg-gray-100 transition">
                    <td class="px-4 py-2 border text-center">{{ $index + 1 }}</td>
                    <td class="px-4 py-2 border">{{ $k->nama }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
