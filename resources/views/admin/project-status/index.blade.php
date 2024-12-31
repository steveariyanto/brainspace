@extends('layouts.admin.app')

@section('name', "Project Status")

@section('content')
<script async>
    function confirmDelete(id) {
        console.log("coba")
        let is_confirmed = confirm('Apakah anda yakin ingin menghapus status ini?');
        if (is_confirmed) {
            window.location.href = '/project-status/hapus/' + id;
        }
    }
</script>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-gray-800">Project Status</h1>
            <a href="/project-status/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm text-lg">
                Tambah Status
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($statuses as $index => $status)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $status->name }}</td>
                        <td>
                            <a href="/project-status/edit/{{ $status->id }}" class="bg-yellow-500 text-white px-3 py-2 rounded-md hover:bg-yellow-800 transition-all" >
                                <i class="fa fa-pencil"></i> edit
                            </a>

                            <button onclick="confirmDelete(`{{ $status->id }}`)" class="bg-red-500 text-white px-3 py-2 rounded-md hover:bg-red-800 transition-all">
                                <i class="fa fa-pencil"></i> Hapus
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
