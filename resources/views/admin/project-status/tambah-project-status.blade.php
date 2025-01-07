@extends('layouts.admin.app')

@section('name', "Home")

@section('content')

@php
    $route = (isset($status))? route('project-status.update', $status->id) : route('project-status.save');
@endphp
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Category</h1>
</div>

<div class="card p-3">
    <form method="post" action="{{ $route }}" class="space-y-3">
        @csrf

        <div class="form-group text-left">
            <label class="font-bold text-slate-700" for="nama">Nama Status</label>
            <input type="text" class="form-control" id="nama" name="nama" required value="{{ isset($status) ? $status->name : "" }}">
        </div>
        <button type="submit" class="btn btn-primary w-full">{{ (isset($status)) ? "Edit" : "Tambah" }}</button>
    </form>
</div>
@endsection
