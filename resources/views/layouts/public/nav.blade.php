<nav class="flex h-[220px] fixed w-full z-10">
    <div class="flex justify-center items-center w-[300px] p-4 bg-blue-400">
        <div class="flex flex-col gap-4 items-center">
            <i class="ph ph-user-circle text-[64px]"></i>
            @auth
                <!-- Jika pengguna sudah login, tampilkan email dan username -->
                <div class="text-center">
                    <p class="font-bold">{{ auth()->user()->name }}</p>
                    <p class="text-gray-900">{{ auth()->user()->email }}</p>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                <a href="#" class="bg-red-500 rounded-full p-2 px-3 text-white " onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
            @else
                <!-- Jika belum login, tampilkan tombol Masuk -->
                <button class="rounded-full bg-white py-2 px-3 border-2 border-gray-500">
                    <a href="{{ route('login') }}">Masuk</a>
                </button>
            @endauth
        </div>
    </div>

    <div class="w-full flex-1 bg-blue-300 p-5">
        <div class="header-text text-center py-4">
            <a href="/"><h1 class="text-[32px]">BrainSpace</h1></a>
            <h5>Repositori Proyek Mahasiswa Institut Teknologi dan Bisnis Sabda Setia</h5>
        </div>

        <div class="flex justify-center">
            <div class="relative w-1/2">
                <input class="rounded-full p-3 w-full" type="text" placeholder="Search...">
                <button class="absolute right-2 top-[24%]">
                    <i class="ph ph-magnifying-glass p-3 bg-gray-200 rounded-full"></i>
                </button>
            </div>
        </div>
    </div>
</nav>
