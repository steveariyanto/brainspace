@extends('layouts.public.app')

@section('name', 'Home')

@section('content')
    @auth
        @if (auth()->user()->role == 'user')
            <div class="py-2 flex justify-between items-center">

                <!-- Tombol Tambah Proyek Baru -->
                <a href="/tambah-konten"
                    class="rounded-md bg-blue-400 py-1 px-6 text-white text-center text-sm font-medium hover:bg-blue-400 duration-300">
                    Tambah Proyek Baru
                </a>
            </div>
        @endif
    @endauth

    <div class="flex flex-col gap-6">
        <div class="py-4">
            <!-- Tampilan seperti Google Drive -->
            <div class="grid grid-cols-[4fr_2fr_2fr_2fr] gap-2 items-center text-sm font-medium bg-gray-100 p-3 rounded-md">
                <span class="text-gray-800">Nama</span>
                <span class="text-gray-800">Kategori</span>
                <span class="text-gray-800">Tanggal Ditambah</span>
                <span class="text-gray-800">Tanggal Diubah</span>
            </div>
            <div class="flex flex-col gap-2">
               @foreach($data as $category)
                   @foreach($category["contents"] as $content)
                        <div class="grid grid-cols-[4fr_2fr_2fr_2fr] gap-4 items-center bg-gray-50 p-4 rounded-md shadow-md hover:shadow-lg transition">
                            <!-- Nama File -->
                            <a href="{{ $content["project_link"] }}" target="_blank" class="text-blue-500 hover:underline truncate">{{ $content["title"] }}</a>
                            <!-- Kategori -->
                            <span class="text-gray-600">{{ $category["name"] }}</span>
                            <!-- Tanggal Dibuat -->
                            <span class="text-gray-600">
                            {{ \Carbon\Carbon::parse($content["created_at"] ?? now())->format('d-m-Y') }}
                            </span>
                            <!-- Tanggal Diubah -->
                            <span class="text-gray-600">
                            {{ \Carbon\Carbon::parse($content["updated_at"] ?? now())->format('d-m-Y') }}
                            </span>
                        </div>
                   @endforeach
               @endforeach
            </div>
        </div>
    </div>
@endsection