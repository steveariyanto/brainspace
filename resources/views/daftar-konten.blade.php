@extends("layouts.public.app-2")

@section('name', "Daftar Konten")

@section('content')
    <!-- Tombol Kembali (ke halaman tambah konten) -->
    <a href="{{ url('/tambah-konten') }}" class="bg-blue-500 text-white p-2 rounded-md mb-4 inline-block">
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
@endsection
