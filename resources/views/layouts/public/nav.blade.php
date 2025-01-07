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
                        <input type="text" class="form-control bg-light border-400 small rounded-pill"
                            placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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

<!-- Nav Item - Search Dropdown (Visible Only XS) -->
<li class="nav-item dropdown no-arrow d-sm-none">
    <a class="nav-link dropdown-toggle text-white" href="#" id="searchDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-search fa-fw"></i>
    </a>
    <!-- Dropdown - Search -->
    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
        <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
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
