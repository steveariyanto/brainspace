<nav class="flex h-[220px] fixed w-full z-10 bg-gradient-to-r from-blue-500 to-blue-300 shadow-lg">
    <!-- Sidebar -->
    <div class="flex flex-col justify-center items-center w-[300px] p-6 bg-blue-700 text-white">
        <div class="flex flex-col gap-4 items-center">
            <i class="ph ph-user-circle text-[64px] text-white"></i>
            @auth
                <!-- Jika pengguna sudah login -->
                <div class="text-center">
                    <p class="font-bold text-lg">{{ auth()->user()->name }}</p>
                    <p class="text-sm text-gray-200">{{ auth()->user()->email }}</p>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="#" class="bg-red-500 hover:bg-red-600 transition rounded-full p-2 px-4 text-white text-sm font-medium"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
            @else
                <!-- Jika belum login -->
                <button class="rounded-full bg-white py-2 px-4 text-blue-600 font-medium border-2 border-blue-600 hover:bg-blue-100 transition">
                    <a href="{{ route('login') }}">Masuk</a>
                </button>
            @endauth
        </div>
    </div>

    <!-- Header and Search -->
    <div class="flex-1 bg-blue-100 p-5">
        <!-- Header Text -->
        <div class="header-text text-center py-4">
            <a href="/" class="text-blue-800 hover:text-blue-600 transition">
                <h1 class="text-[32px] font-bold">BrainSpace</h1>
            </a>
            <h5 class="text-gray-600 font-medium">Repositori Proyek Mahasiswa Institut Teknologi dan Bisnis Sabda Setia</h5>
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
