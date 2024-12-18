@extends('layouts.admin.app')

@section('name', "Project Status")

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-gray-800">Project Status</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm text-lg">
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
                    @php
                        $statuses = ['Pending', 'Accept', 'Reject']; // Data statis untuk status
                    @endphp
                    @foreach ($statuses as $index => $status)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $status }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i> Edit
                            </a>
                            <button type="button" class="btn btn-sm btn-danger" onclick="confirm('Are you sure?')">
                                <i class="fa fa-trash"></i> Delete
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
