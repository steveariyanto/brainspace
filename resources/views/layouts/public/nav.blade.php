<nav class="flex h-[220px] top-0 fixed w-full z-10">
    <div class="flex justify-center items-center w-[300px] p-2 bg-blue-400">
        <div class="flex flex-col gap-4 items-center text-black">
            <i class="ph ph-user-circle text-[64px]"></i>
            @auth
                <!-- Jika pengguna sudah login -->
                <div class="text-center">
                    <p class="font-bold text-black">{{ auth()->user()->name }}</p>
                </div>

                <div class="d-flex gap-1">
                    <a href="/dashboard" class="bg-blue-600 rounded-full p-2 px-3 text-white ">
                        Dashboard
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <a href="#" class="bg-red-500 rounded-full p-2 px-3 text-white " onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </div>
            @else
                <!-- Jika belum login -->
                <button class="rounded-full bg-white py-2 px-4 text-blue-600 font-medium border-2 border-blue-600 hover:bg-blue-100 transition">
                    <a href="{{ route('login') }}">Masuk</a>
                </button>
            @endauth
        </div>
    </div>

    <div class="w-full flex-1 bg-blue-300 p-5">
        <div class="header-text text-center py-2 text-black">
            <a href="/"><h1 class="text-[32px]">BrainSpace</h1></a>
            <h5>Repositori Proyek Mahasiswa Institut Teknologi dan Bisnis Sabda Setia</h5>
        </div>

        <!-- Search Bar -->
        <div class="flex justify-center mt-6">
        <div class="relative w-3/4 sm:w-1/2 flex items-center">
            <input
                class="rounded-full p-3 w-full border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition text-gray-700"
                type="text" placeholder="Search...">
            <button
                class="ml-2 bg-blue-500 hover:bg-blue-600 transition text-white p-3 rounded-full flex items-center justify-center">
                <i class="ph ph-magnifying-glass"></i>
            </button>
        </div>
        </div>
    </div>
</nav>
