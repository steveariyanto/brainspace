@extends("layouts.public.app-2")

@section('name', "Tambah Konten")

@php
$route = isset($project) ? "/update-konten/".$project->projects_id : route('save.konten');
$category_id = (isset($project)) ? $project->category->id : null;
@endphp

@section('content')
    <!-- Tombol Kembali (ke halaman home) -->
    <a href="{{ url('/home') }}" class="bg-blue-500 text-white p-2 rounded-md mb-4 inline-block">
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
@endsection
