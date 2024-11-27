@extends("layouts.public.app-2")

@section('name', "Tambah Konten")

@php
$route = isset($project) ? "/update-konten/".$project->projects_id : route('save.konten');
$category_id = (isset($project)) ? $project->category->id : null;
@endphp

@section('content')
    <div class="container mx-auto p-6">
        <div class="mb-6 bg-white p-5 rounded-lg shadow-md">
            <a href="{{ url('/home') }}" class="bg-blue-500 text-white p-2 rounded-md mb-4 inline-block">
                Kembali
            </a>

            <div class="mx-auto">
                <form method="POST" action="{{ $route }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="col-span-1">
                            <label for="judul" class="block text-sm font-medium text-gray-700">Judul Proyek</label>
                            <input name="judul" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" type="text" placeholder="Tulis Judulmu disini" value="{{ $project->projects_title ?? '' }}">
                        </div>

                        <div class="col-span-1">
                            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi Proyek</label>
                            <textarea class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" name="deskripsi" placeholder="Tulis deskripsi disini">{{ $project->projects_description ?? '' }}</textarea>
                        </div>

                        <div class="col-span-1">
                            <label class="block text-sm font-medium text-gray-700" for="kategori">Kategori</label>
                            <select id="kategori" name="kategori" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-1">
                            <label class="block text-sm font-medium text-gray-700" for="proyek">Unggah Konten</label>
                            <input type="file" name="proyek" id="proyek" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>

                    <div class="mt-4 text-right">
                        <button class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded shadow-md transition duration-200">
                            Tambah Konten
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
