@extends('layouts.app')

@section('title', 'Daftar Kelas')

@section('content')
<div class="flex flex-col items-center justify-center bg-gray-100 p-6 mt-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Daftar Kelas</h1>

    <a href="{{ route('kelas.create') }}"
        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg mb-6 shadow-md transition">
        + Tambah Data Kelas
    </a>


    <div class="overflow-x-auto w-full max-w-4xl">
        <table class="w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">Nama Kelas</th>
                    <th class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-300">
                @foreach ($kelas as $k)
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 text-gray-800">{{ $k->nama }}</td>
                    <td class="px-6 py-4 flex justify-center space-x-3">

                        <a href="{{ route('kelas.edit', $k->id) }}">
                            <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></button>

                        </a>
                        <form action="{{ route('kelas.destroy', $k->id) }}" method="POST">
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