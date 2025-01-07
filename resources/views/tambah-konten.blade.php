@extends("layouts.public.app-2")

@section('name', "Tambah Konten")

@php
$route = isset($project) ? "/update-konten/".$project->projects_id : route('save.konten');
$category_id = (isset($project)) ? $project->category->id : null;
@endphp

@section('content')
    <!-- <div class="container mx-auto p-6">
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
    </div> -->

    <div class="container mx-auto p-6">
    <!-- Notifikasi Sukses -->
    @if (session('success'))
        <div class="mb-6">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
                <button class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
                    <span class="text-green-500">&times;</span>
                </button>
            </div>
        </div>
    @endif

    <div class="mb-2 bg-white p-2 rounded-lg shadow-md">
        <a href="/daftar-konten" class="bg-blue-500 text-white p-2 rounded-md mb-3   inline-block">
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
                    <!-- <div class="col-span-1">
                        <label class="block text-sm font-medium text-gray-700" for="kategori">Kategori</label>
                        <select id="kategori" name="kategori" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required onchange="updateFileAccept()">
                            <option value="" disabled selected>Pilih Kategori</option>
                            <option value="PPT">PPT</option>
                            <option value="Paper">Paper</option>
                            <option value="Laporan">Laporan Proyek</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div> -->

                    <div class="col-span-1">
                        <label for="file_link" class="block text-sm font-medium text-gray-700">Link File</label>
                        <input type="url" name="file_link" id="file_link" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Masukkan URL file (opsional)">
                        <p class="text-xs text-gray-500 mt-1">Contoh: https://example.com/file.pdf</p>
                    </div>

                    <div class="col-span-1">
                        <label class="block text-sm font-medium text-gray-700" for="proyek">Unggah Konten</label>
                        <input type="file" name="proyek" id="proyek" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" accept="" onchange="previewFile()">

                        <!-- Area untuk menampilkan review -->
                        <div id="file-preview" class="mt-4 hidden">
                            <label class="block text-sm font-medium text-gray-700">Review File:</label>
                            <div id="file-info" class="mt-2 p-4 border border-gray-300 rounded-md bg-gray-100">
                                <!-- Info file akan ditampilkan di sini -->
                            </div>
                            <div id="file-display" class="mt-2"></div> <!-- Pratinjau file -->
                        </div>
                    </div>


                    <script>
                        function updateFileAccept() {
                            const kategori = document.getElementById('kategori').value;
                            const fileInput = document.getElementById('proyek');

                            switch (kategori) {
                                case 'PPT':
                                    fileInput.accept = '.ppt,.pptx';
                                    break;
                                case 'Paper':
                                    fileInput.accept = '.pdf';
                                    break;
                                case 'Laporan Proyek':
                                    fileInput.accept = '.doc,.docx';
                                    break;
                                default:
                                    fileInput.accept = '';
                            }
                        }

                        function previewFile() {
                            const fileInput = document.getElementById('proyek');
                            const filePreview = document.getElementById('file-preview');
                            const fileInfo = document.getElementById('file-info');
                            const fileDisplay = document.getElementById('file-display');
                            const file = fileInput.files[0];

                            if (file) {
                                // Tampilkan nama dan ukuran file
                                fileInfo.innerHTML = `
                                    <p><strong>Nama File:</strong> ${file.name}</p>
                                    <p><strong>Ukuran File:</strong> ${(file.size / 1024).toFixed(2)} KB</p>
                                `;

                                // Tampilkan pratinjau jika file dapat ditampilkan
                                fileDisplay.innerHTML = ''; // Reset area pratinjau
                                if (file.type.startsWith('image/')) {
                                    const img = document.createElement('img');
                                    img.src = URL.createObjectURL(file);
                                    img.alt = 'Pratinjau Gambar';
                                    img.classList.add('max-w-full', 'h-auto', 'rounded-md', 'mt-2');
                                    fileDisplay.appendChild(img);
                                } else if (file.type === 'application/pdf') {
                                    const iframe = document.createElement('iframe');
                                    iframe.src = URL.createObjectURL(file);
                                    iframe.classList.add('w-full', 'h-64', 'mt-2');
                                    fileDisplay.appendChild(iframe);
                                } else {
                                    fileDisplay.innerHTML = '<p class="text-gray-600">Pratinjau tidak tersedia untuk jenis file ini.</p>';
                                }

                                filePreview.classList.remove('hidden');
                            } else {
                                // Sembunyikan pratinjau jika tidak ada file
                                filePreview.classList.add('hidden');
                            }
                        }
                    </script>


                    <!-- <div class="col-span-1">
                        <label class="block text-sm font-medium text-gray-700" for="proyek">Unggah Konten</label>
                        <input type="file" name="proyek" id="proyek" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                </div> -->

                <div class="fixed bottom-10 right-6">
                    <button class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded shadow-md transition duration-200">
                        Tambah Konten
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
