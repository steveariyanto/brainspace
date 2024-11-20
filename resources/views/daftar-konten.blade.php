@extends("layouts.public.app-2")

@section('name', "Daftar Konten")

@section('content')
    <!-- Tombol Kembali (ke halaman tambah konten) -->
<!--    <a href="{{ url('/tambah-konten') }}" class="bg-blue-500 text-white p-2 rounded-md mb-4 inline-block">
        Kembali
    </a>

    <table class="table-auto w-full max-w-[1280px] mx-auto my-10">
        <thead>
            <tr>
                <th class="border border-slate-600 p-3" rowspan="2">No</th>
                <th class="border border-slate-600 p-3" colspan="2">Konten</th>
                <th class="border border-slate-600 p-3" rowspan="2">Deskripsi</th>
                <th class="border border-slate-600 p-3" rowspan="2">Tanggal Publikasi</th>
                <th class="border border-slate-600 p-3" rowspan="2">Tanggal Update</th>
                <th class="border border-slate-600 p-3" rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th class="border border-slate-600 p-3">Judul</th>
                <th class="border border-slate-600 p-3">Kategori</th>
            </tr>
        </thead>
        <tbody>
            @for($i = 0; $i < count($project); $i++)
                <tr>
                    <td class="border border-slate-600 p-3">{{ $i+1 }}</td>
                    <td class="border border-slate-600 p-3">{{ $project[$i]['projects_title'] }}</td>
                    <td class="border border-slate-600 p-3">{{ $project[$i]['category']['name'] }}</td>
                    <td class="border border-slate-600 p-3">{{ $project[$i]['projects_description'] }}</td>
                    <td class="border border-slate-600 p-3">{{ \Carbon\Carbon::parse($project[$i]->created_at)->format('d-m-Y') }}</td>
                    <td class="border border-slate-600 p-3">{{ \Carbon\Carbon::parse($project[$i]->updated_at)->format('d-m-Y') }}</td>
                    <td class="border border-slate-600 p-2">
                        <a href="{{'/hapus-konten/'.$project[$i]['projects_id']}}" class="bg-red-500 rounded-md p-1 px-2">
                            <i class="ph ph-trash text-white"></i>
                        </a>

                        <a href="{{'/edit-konten/'.$project[$i]['projects_id']}}" class="bg-yellow-500 rounded-md p-1 px-2">
                            <i class="ph ph-pencil text-white"></i>
                        </a>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
@endsection -->

<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-10 p-5">
        <!-- Tombol Kembali (ke halaman tambah konten) -->
        <div class="mb-6">
            <a href="/tambah-konten" class="bg-blue-400 hover:bg-blue-500 text-white font-semibold py-2 px-4 rounded shadow-md transition duration-200">
                Kembali
            </a>
        </div>
        <!-- Tabel Daftar Konten -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full bg-white" id="contentTable">
                <thead class="bg-blue-400 text-white">
                    <tr>
                        <th class="w-1/12 py-3 px-4 text-center" rowspan="2">No</th>
                        <th class="w-2/12 py-3 px-4 text-center" colspan="2">Konten</th>
                        <th class="w-3/12 py-3 px-4 text-center" rowspan="2">Deskripsi</th>
                        <th class="w-2/12 py-3 px-4 text-center" rowspan="2">Tanggal Publikasi</th>
                        <th class="w-2/12 py-3 px-4 text-center" rowspan="2">Tanggal Update</th>
                        <th class="w-2/12 py-3 px-4 text-center" rowspan="2">Link</th>
                        <th class="w-2/12 py-3 px-4 text-center" rowspan="2">Aksi</th>
                    </tr>
                    <tr>
                        <th class="py-3 px-4 text-center">Judul</th>
                        <th class="py-3 px-4 text-center">Kategori</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700" id="contentTableBody">
                    <!-- Example data, replace with dynamic content -->
                </tbody>
            </table>
        </div>
    </div>

    @for($i = 0; $i < count($project); $i++)
    <tr>
        <td class="py-3 px-4 text-center">${rowCount + 1}</td>
            <td class="py-3 px-4 text-center">${judul}</td>
            <td class="py-3 px-4 text-center">${kategori}</td>
            <td class="py-3 px-4 text-center">${deskripsi}</td>
            <td class="py-3 px-4 text-center">${LinkLink}</td>
            <td class="py-3 px-4 text-center">${tanggalPublikasi}</td>
            <td class="py-3 px-4 text-center">${tanggalUpdate}</td>
            <td class="py-3 px-4 text-center">
                <a href="#" class="text-red-500 hover:text-red-700 transition duration-200">
                    <i class="fas fa-trash"></i>
                </a>
                <a href="#" class="text-blue-500 hover:text-blue-700 transition duration-200 ml-3">
                    <i class="fas fa-pencil-alt"></i>
                </a>
        </td>
    </tr>
@endfor