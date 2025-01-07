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
                    @foreach ($projects as $index => $project)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $project->user?->name }}</td>
                        <td>{{ $project->projects_title }}</td>
                        <td>{{ $project->projects_description }}</td>
                        <td>
                            @if($project->file)
                            <a href="{{ $project->project_link }}" target="_blank" class="btn btn-sm btn-info">
                                <i class="fa fa-download"></i> View
                            </a>
                            @else
                            <span class="text-muted">Tidak ada file</span>
                            @endif
                        </td>
                        <td>
                            @php
                                $status = "warning";
                                if($project->projectStatus->id == 1){$status = "success"; }
                                else if($project->projectStatus->id == 3){ $status = "danger";}
                            @endphp

                            <span class="badge badge-{{ $status }}">
                                {{ $project->projectStatus->name }}
                            </span>
                        </td>
                        <td>
                            @if($project->projectStatus->id == 2)
                                <a href="/project-approval/approve/{{ $project->projects_id }}" class="btn btn-sm btn-success">
                                    <i class="fa fa-pencil"></i> Terima
                                </a>
                                <a href="/project-approval/reject/{{ $project->projects_id }}" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                    <i class="fa fa-trash"></i> Tolak
                                </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
