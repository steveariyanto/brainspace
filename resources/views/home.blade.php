@extends('layouts.public.app')

@section('name', "Home")

@section('content')
    @auth
    <div class="py-3 flex justify-between items-end">
        <!-- Tombol Daftar Proyek yang mengarah ke daftar-konten -->
        <a href="/daftar-konten" class="text-2xl font-semibold py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-400 duration-300">
            Daftar Proyek
        </a>

        <a href="/tambah-konten" class="rounded-md bg-blue-400 py-2 px-3 text-white hover:bg-blue-200 hover:text-black duration-300">Tambah Proyek Baru</a>
    </div>
    @endauth

    <div class="flex flex-col gap-5">
        <div class="py-2">
            <div class="flex justify-between">
                <h5 class="text-md py-2">PPT</h5>

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
                <h5 class="text-md py-2">Laporan</h5>

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
@endsection
