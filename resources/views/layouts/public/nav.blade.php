<!-- <nav class="flex h-[220px] top-0 fixed w-full z-10">
    <div class="flex justify-center items-center w-[300px] p-2 bg-blue-400">
        <div class="flex flex-col gap-4 items-center text-black">
            <i class="ph ph-user-circle text-[64px]"></i>
            @auth
                Jika pengguna sudah login
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
                Jika belum login
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

        Search Bar
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
</nav> -->

<!-- Topbar -->
<!-- <nav class="navbar navbar-expand navbar-light bg-gradient-to-r from-blue-600 to-blue-800 topbar mb-4 static-top shadow-lg" id="topbar"> -->

    <!-- Sidebar Toggle (Topbar) -->
    <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 text-white hover:bg-blue-700 p-2 transition duration-300">
        <i class="fa fa-bars"></i>
    </button> -->

    <!-- Topbar Search -->
    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small rounded-pill" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary rounded-pill" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form> -->
    
@if (Route::is('home'))
    <nav class="fixed top-0 right-0 z-50 w-[1143px] bg-gradient-to-r from-blue-600 to-blue-900 shadow-lg py-3 px-6">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 text-white hover:bg-blue-700 p-2 transition duration-300">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <div class="flex justify-between items-center w-full">
        
        <!-- Topbar Search -->
        <form class="flex items-center w-[80%]">
            <div class="input-group w-full">
                <input type="text" class="form-control bg-light border-400 small rounded-pill" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary rounded-pill" type="button">
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

                    <a href="#" class="bg-red-500 rounded-full p-2 px-3 text-white mt-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </div>
            @else
                <!-- Jika pengguna belum login -->
                <button class="rounded-full bg-white py-2 px-4 text-blue-600 font-medium border-2 border-blue-600 hover:bg-blue-100 transition">
                    <a href="{{ route('login') }}">Masuk</a>
                </button>
            @endauth
        </div>
    </div>
</nav>
@endif

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle text-white" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Search -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <!-- <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-100">Douglas McGee</span>
                <img class="img-profile rounded-circle"
                    src="img/undraw_profile.svg" style="width: 40px; height: 40px;">
            </a> -->
            <!-- Dropdown - User Information -->
            <!-- <div class="dropdown-menu dropdown-menu-right shadow-lg animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" onclick="hideNavbar()">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#" onclick="hideNavbar()">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#" onclick="hideNavbar()">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a> -->
                <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" onclick="hideNavbar()">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a> -->
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->

<script>
    // Function to hide the navbar
    function hideNavbar() {
        document.getElementById("topbar").style.display = "none";
    }
</script>
