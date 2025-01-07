 <!-- @extends('layouts.public.app')

@section('name', "Home")

@section('content')
    @auth
        @if(auth()->user()->role == "user") -->
        <!-- <div class="py-2 flex justify-evenly"> -->
            <!-- Tombol Daftar Proyek yang mengarah ke daftar-konten -->
            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-2">
                    <a href="/daftar-konten" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm text-lg">
                        <i class="fas fa-download fa-sm text-white-50"></i> Daftar Proyek
                    </a> -->

                <!-- Tombol Tambah Proyek Baru -->
                <!-- <div class="card shadow mb-4">
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                    <a href="/tambah-konten" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm text-lg">
                        <i class="fas fa-download fa-sm text-white-50"></i> Tambah Proyek Baru
                    </a>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- @endif
@endauth -->

@extends('layouts.public.app')

@section('name', "Home")

@section('content')
    @auth
        @if(auth()->user()->role == "user")
        <div class="flex flex-col gap-1">
            <div class="py-1">
                <div class="flex justify-between">
                    <h5 class="text-md py-1">PPT</h5>
                    <a href="/daftar-konten" class="underline">Lainnya</a>
                </div>

                <div class="flex whitespace-nowrap gap-4 overflow-x-auto">
                    @for ($i = 1; $i <= 12; $i++)
                        <div class="w-full aspect-video flex-[0_0_16.667%] bg-gray-300">
                            PPT {{ $i }}
                        </div>
                    @endfor

                </div>
            </div>

            <div class="py-2">
                <div class="flex justify-between">
                    <h5 class="text-md py-2">Paper</h5>

                    <a href="/daftar-konten" class="underline">Lainnya</a>
                </div>

                <div class="flex whitespace-nowrap gap-4 overflow-x-auto">
                    @for ($i = 1; $i <= 12; $i++)
                        <div class="w-full aspect-[3/4] flex-[0_0_16.667%] bg-gray-300">
                            Paper {{ $i }}
                        </div>
                    @endfor

                </div>
            </div>

            <div class="py-2">
                <div class="flex justify-between">
                    <h5 class="text-md py-2">Laporan Proyek</h5>
                    <a href="/daftar-konten" class="underline">Lainnya</a>
                </div>

                <div class="flex whitespace-nowrap gap-4 overflow-x-auto">
                    @for ($i = 1; $i <= 12; $i++)
                        <div class="w-full aspect-[5/7] flex-[0_0_16.667%] bg-gray-300">
                            Laporan {{ $i }}
                        </div>
                    @endfor
                </div>
            </div>
        </div> 
    @endif
@endauth 
@endsection
