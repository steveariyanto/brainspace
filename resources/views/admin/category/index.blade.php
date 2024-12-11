@extends('layouts.admin.app')

@section('name', "Home")

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-gray-800">Category</h1>
            <!-- Tidak ada tombol Tambah Kategori karena hanya menampilkan kategori statis -->
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
                    <!-- Menampilkan 4 kategori statis -->
                    <tr>
                        <td>1</td>
                        <td>PowerPoint</td>
                        <td>
                            <!-- Aksi (misalnya tombol Edit dan Hapus) -->
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Paper</td>
                        <td>
                            <!-- Aksi (misalnya tombol Edit dan Hapus) -->
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Laporan Proyek</td>
                        <td>
                            <!-- Aksi (misalnya tombol Edit dan Hapus) -->
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Lainnya</td>
                        <td>
                            <!-- Aksi (misalnya tombol Edit dan Hapus) -->
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
