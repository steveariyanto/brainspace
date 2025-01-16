@if (Route::is('home') || Route::is('notifikasi'))
    <nav class="fixed top-0 right-0 z-50 w-full pl-[14rem]">

        <div class="w-full bg-gradient-to-r from-blue-600 to-blue-900  py-3 px-6">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop"
                class="btn btn-link d-md-none rounded-circle mr-3 text-white hover:bg-blue-700 p-2 transition duration-300">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <div class="flex justify-between items-center w-full">

                <!-- Topbar Search -->
                <form class="flex items-center w-[80%]">
                    <div class="input-group w-full">
                        <input type="text" class="form-control bg-light border-400 small rounded-pill" id="search"
                            placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary rounded-pill" type="button" id="search_button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- User Info and Logout -->
                <div class="flex items-center space-x-4">
                    @auth
                        <!-- Jika pengguna sudah login -->
                        <div class="flex flex-col items-center text-white">
                            <p class="font-bold">{{ auth()->user()->name }}</p>

                            <!-- Logout -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            <a href="#" class="bg-red-500 rounded-full p-2 px-3 text-white mt-2"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </div>
                    @else
                        <!-- Jika pengguna belum login -->
                        <button
                            class="rounded-full bg-white py-2 px-4 text-blue-600 font-medium border-2 border-blue-600 hover:bg-blue-100 transition">
                            <a href="{{ route('login') }}">Masuk</a>
                        </button>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
@endif
<!-- End of Topbar -->

<script async>
    // Function to hide the navbar
    function hideNavbar() {
        document.getElementById("topbar").style.display = "none";
    }
</script>
