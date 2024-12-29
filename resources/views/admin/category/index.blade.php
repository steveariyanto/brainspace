@extends('layouts.admin.app')

@section('name', "Home")

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-gray-800">Category</h1>
            <a href="/category/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm text-lg">
                <i class="fas fa-download fa-sm text-white-50"></i> Tambah Kategori
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $index => $category)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="/category/edit/{{ $category->id }}" class="bg-yellow-500 text-white px-3 py-2 rounded-md hover:bg-yellow-800 transition-all" >
                                <i class="fa fa-pencil"></i> edit
                            </a>

                            <a class="bg-red-500 text-white px-3 py-2 rounded-md hover:bg-red-800 transition-all">
                                <i class="fa fa-pencil"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
