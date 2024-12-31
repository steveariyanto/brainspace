@extends('layouts.admin.app')

@section('name', "Home")

@section('content')
<!-- Page Heading -->
<div class="mb-4">
    <h1 class="h3 mb-0 font-bold text-slate-700">Dashboard</h1>
</div>

<div class="flex flex-wrap gap-3">
    <div class="card p-3 w-full text-center max-w-[350px] space-y-4 border-2 border-blue-500">
        <h3 class="font-semibold text-lg text-slate-800">Konten Yang Diajukan</h3>
        <span class="flex justify-center p-2">
            <i class="fas fa-bell"></i>
            <span class="text-blue-500 text-5xl font-medium">{{ $data["requested_konten"] }}</span>
        </span>
    </div>

    <div class="card p-3 w-full text-center max-w-[350px] space-y-4 border-2 border-green-600">
        <h3 class="font-semibold text-lg text-slate-800">Konten Yang Diterima</h3>
        <span class="flex justify-center p-2">
            <i class="fas fa-bell"></i>
            <span class="text-green-600 text-5xl font-medium"> {{ $data["approved_konten"] }} </span>
        </span>
    </div>

    <div class="card p-3 w-full text-center max-w-[350px] space-y-4 border-2 border-red-600">
        <h3 class="font-semibold text-lg text-slate-800">Konten Yang Ditolak</h3>
        <span class="flex justify-center p-2">
            <i class="fas fa-bell"></i>
            <span class="text-red-600 text-5xl font-medium"> {{ $data["rejected_konten"] }} </span>
        </span>
    </div>
</div>

<div class="space-y-2 my-5">
    <h2 class="h5 mb-0 font-bold text-slate-700">Jumlah Konten Per Kategori</h2>

    <div class="flex flex-wrap gap-3">
        @foreach($data["data_per_kategori"] as $key => $value)
        <div class="card p-3 w-full text-center max-w-[350px] space-y-4 border-2 border-slate-600">
            <h3 class="font-semibold text-lg text-slate-800">{{ $value["name"] }}</h3>
            <span class="flex justify-center p-2">
                <i class="fas fa-bell"></i>
                <span class="text-slate-600 text-5xl font-medium">{{ $value["count"] }}</span>
            </span>
        </div>

        @endforeach
    </div>
</div>
@endsection
