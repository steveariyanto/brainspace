@extends("layouts.public.app-2")

@section('name', "Tambah Konten")

@php
$route = isset($project) ? "/update-konten/".$project->projects_id : route('save.konten');
$category_id = (isset($project)) ? $project->category->id : null;
@endphp

@section('content')
  <!-- Tombol Kembali (ke halaman home) -->
<!--      <a href="{{ url('/home') }}" class="bg-blue-500 text-white p-2 rounded-md mb-4 inline-block">
        Kembali
    </a>

    <div class="bg-slate-300 max-w-[800px] mx-auto p-2">
        <form method="POST" action="{{ $route }}" enctype="multipart/form-data">
            @csrf
            <div class="p-2 flex flex-col gap-2 py-2">
                <label for="judul">Judul Proyek</label>
                <input name="judul" class="p-2 rounded-sm" type="text" placeholder="Tulis Judulmu disini" value="{{ $project->projects_title ?? '' }}">
            </div>

            <div class="p-2 flex flex-col gap-2 py-2">
                <label for="deskripsi">Deskripsi Proyek</label>
                <textarea class="p-2 rounded-sm" name="deskripsi" placeholder="Tulis deskripsi disini">{{ $project->projects_description ?? '' }}</textarea>
            </div>

            <div class="flex flex-row gap-2 py-2">
                <div class="p-2 flex flex-col gap-1 py-2 w-1/4">
                    <label for="kategori">Kategori</label>
                    <ul>
                        @foreach ($categories as $category)
                            <li>
                                <input type="radio" name="kategori" value="{{ $category->id }}" id="kategori_{{ $category->id }}" {{ $category->id == $category_id ? 'checked' : ''}}>
                                <label for="kategori_{{ $category->id }}">{{ $category->name }}</label>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="p-2 flex flex-col gap-1 py-2 w-5/12">
                    <label for="proyek">Unggah Konten</label>
                    <input type="file" name="proyek" id="proyek" class="px-3 py-5">
                </div>
            </div>

            <div class="p-2 flex flex-row gap-2 py-2">
                <button class="w-full p-3 rounded-md bg-blue-400">Simpan</button>
            </div>
        </form>
    </div>
@endsection -->

        <!-- Form Input Konten -->
        <body class="bg-gray-100 font-roboto">
    <div class="container mx-auto p-6">
        <div class="mb-6 bg-white p-5 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Tambah Konten Baru</h2>
            <form id="contentForm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                        <input type="text" id="judul" name="judul" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="col-span-1">
                        <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select id="kategori" name="kategori" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                            <option value="1">PowerPoint</option>
                            <option value="2">Paper</option>
                            <option value="3">Laporan Proyek</option>
                            <option value="4">lainnya</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required></textarea>
                    </div>
                    <div class="col-span-2">
                        <label for="linkProyek" class="block text-sm font-medium text-gray-700">Link Proyek</label>
                        <input type="url" id="linkProyek" name="linkProyek" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="col-span-1">
                        <label for="tanggalPublikasi" class="block text-sm font-medium text-gray-700">Tanggal Publikasi</label>
                        <input type="date" id="tanggalPublikasi" name="tanggalPublikasi" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                    <div class="col-span-1">
                        <label for="tanggalUpdate" class="block text-sm font-medium text-gray-700">Tanggal Update</label>
                        <input type="date" id="tanggalUpdate" name="tanggalUpdate" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>
                </div>
                <div class="mt-4 text-right">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded shadow-md transition duration-200">
                        Tambah Konten
                    </button>
                </div>
            </form>
        </div>
    </div>