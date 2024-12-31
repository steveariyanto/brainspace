 @extends('layouts.public.app')

 @section('name', 'Home')

 @section('content')
     @auth
         @if (auth()->user()->role == 'user')
             <div class="py-3 flex justify-between items-center">
                 <!-- Tombol Daftar Proyek yang mengarah ke daftar-konten -->
                 <a href="/daftar-konten"
                     class="text-2xl font-semibold py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-400 duration-300">
                     Daftar Proyek
                 </a>

                 <!-- Tombol Tambah Proyek Baru -->
                 <a href="/tambah-konten"
                     class="rounded-md bg-blue-400 py-2 px-3 text-white hover:bg-blue-200 hover:text-black duration-300">
                     Tambah Proyek Baru
                 </a>
             </div>
         @endif
     @endauth

     <div class="flex flex-col gap-5">
         @foreach ($data as $category)
             <div class="py-2">
                 <div class="flex justify-between">
                    <h5 class="text-md py-2 text-slate-800 font-bold">{{ $category["name"] }}</h5>

                    <a href="/daftar-konten" class="underline">Lainnya</a>
                 </div>

                 <div class="flex whitespace-nowrap gap-4 overflow-x-auto">
                    @foreach($category["contents"] as $content)
                        <a href="{{ $content["project_link"] }}" target="_blank" class="w-full aspect-video flex-[0_0_16.667%] bg-gray-400 p-2 rounded-sm">
                            {{ $content["title"]  }}
                        </a>
                    @endforeach

                 </div>
             </div>
         @endforeach
     </div>
 @endsection
