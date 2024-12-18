@extends('layouts.admin.app')

@section('name', "Project Approval")

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Project Approval</h1>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pengaju</th>
                        <th>Judul Project</th>
                        <th>Deskripsi Project</th>
                        <th>File</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $approvals = [
                            [
                                'applicant_name' => 'John Doe',
                                'project_title' => 'Website Design',
                                'project_description' => 'Pembuatan website responsif untuk perusahaan.',
                                'file' => null, // Tidak ada file
                                'status' => 'Pending',
                                'badge_class' => 'warning'
                            ],
                            [
                                'applicant_name' => 'Jane Smith',
                                'project_title' => 'Mobile App Development',
                                'project_description' => 'Pengembangan aplikasi mobile untuk layanan kesehatan.',
                                'file' => 'documents/app-development.pdf', // Contoh file
                                'status' => 'Accept',
                                'badge_class' => 'success'
                            ],
                            [
                                'applicant_name' => 'Alice Brown',
                                'project_title' => 'Digital Marketing Strategy',
                                'project_description' => 'Strategi pemasaran digital untuk meningkatkan brand awareness.',
                                'file' => null, // Tidak ada file
                                'status' => 'Reject',
                                'badge_class' => 'danger'
                            ]
                        ];
                    @endphp
                    @foreach ($approvals as $index => $approval)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $approval['applicant_name'] }}</td>
                        <td>{{ $approval['project_title'] }}</td>
                        <td>{{ $approval['project_description'] }}</td>
                        <td>
                            @if($approval['file'])
                            <a href="{{ asset('storage/' . $approval['file']) }}" target="_blank" class="btn btn-sm btn-info">
                                <i class="fa fa-download"></i> Download
                            </a>
                            @else
                            <span class="text-muted">Tidak ada file</span>
                            @endif
                        </td>
                        <td>
                            <span class="badge badge-{{ $approval['badge_class'] }}">
                                {{ $approval['status'] }}
                            </span>
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i> Edit
                            </a>
                            <button type="button" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
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
