@extends("layouts.public.app-2")

@section('name', "Daftar Konten")

@section('content')
    <div class="mx-auto p-5">
        <div class="mb-4">
            <a href="/" class="bg-blue-400 hover:bg-blue-500 text-white font-semibold py-2 px-4 rounded shadow-md transition duration-200">
                Kembali
            </a>
        </div>
        <!-- Tabel Daftar Konten -->
        <div class="bg-white shadow-md rounded-lg">
            <table class="min-w-full bg-white" id="contentTable">
                <thead class="bg-blue-400 text-white">
                    <tr>
                        <th class="w-1/12 py-3 px-4 text-center" rowspan="2">No</th>
                        <th class="w-2/12 py-3 px-4 text-center" colspan="2">Konten</th>
                        <th class="w-3/12 py-3 px-4 text-center" rowspan="2">Deskripsi</th>
                        <th class="w-2/12 py-3 px-4 text-center" rowspan="2">Link</th>
                        <th class="w-2/12 py-3 px-4 text-center" rowspan="2">Status</th>
                        <th class="w-2/12 py-3 px-4 text-center" rowspan="2">Tanggal Publikasi</th>
                        <th class="w-2/12 py-3 px-4 text-center" rowspan="2">Aksi</th>
                    </tr>
                    <tr>
                        <th class="py-3 px-4 text-center">Judul</th>
                        <th class="py-3 px-4 text-center">Kategori</th>
                    </tr>
                </thead>

                <tbody class="text-gray-700" id="contentTableBody">
                    @foreach ($project as $key => $item)
                        <tr>
                            <td class="py-2 px-4 text-center">{{ $key + 1 }}</td>
                            <td class="py-2 px-4 text-center">{{ $item->projects_title }}</td>
                            <td class="py-2 px-4 text-center">{{ $item->category->categories_name }}</td>
                            <td class="py-2 px-4 text-center">{{ $item->projects_description }}</td>
                            <td class="py-2 px-4 text-center">
                                @if($item->project_link)
                                    <a href="{{ $item->project_link }}" class="text-blue-500" target="_blank">Klik Link</a>
                                @else
                                    Tidak ada link
                                @endif
                            </td>

                            @php
                                $status = "warning";
                                if($item->projectStatus->id == 1){$status = "success"; }
                                else if($item->projectStatus->id == 3){ $status = "danger";}
                            @endphp
                            <td class="py-2 px-4 text-center"><span class="badge badge-{{$status}}">{{ $item->projectStatus->name }}</span></td>
                            <td class="py-2 px-4 text-center">{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                            <td class="py-2 px-4 text-center">
                                <div class="flex flex-wrap gap-2 justify-center">
                                    <a href="{{ url('/hapus-konten/' . $item->projects_id) }}" class="bg-red-500 rounded-md p-1 px-2">
                                        <i class="ph ph-trash text-white"></i>
                                    </a>

                                    <a href="{{ url('/edit-konten/' . $item->projects_id) }}" class="bg-yellow-500 rounded-md p-1 px-2">
                                        <i class="ph ph-pencil text-white"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
