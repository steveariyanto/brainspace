@if (Route::is('home') || Route::is('notifikasi'))
    <nav class="fixed top-0 right-0 z-50 w-full pl-[14rem]">

        <div class="w-full bg-gradient-to-r from-blue-400 to-blue-500  py-8 px-8">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop"
                class="btn btn-link d-md-none rounded-circle mr-3 text-white hover:bg-blue-700 p-2 transition duration-300">
                <i class="fa fa-bars"></i>
                </button>

            <!-- Topbar Navbar -->
            <div class="flex justify-between items-center w-full">

                <!-- Topbar Search -->
                <!-- <div class="flex items-center w-[80%]">
                    <div class="input-group w-full">
                        <input type="text" class="form-control bg-light border-400 small rounded-pill" id="search"
                            placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary rounded-pill" type="button" id="search_button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </div> -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-4 my-3 my-md-0 mw-100 navbar-search">
                    <div class="input-group ">
                    <input id="searchInput" type="text" class="form-control bg-light border-0 small rounded-pill w-20" 
                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" style="width: 500px;" >
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
                        <!-- <div class="flex flex-col items-center text-white ">
                            <p class="font-bold">{{ auth()->user()->name }}</p>
                        </div> -->
                        <!-- <li class="nav-item dropdown no-arrow"> -->
                            <!-- <a class="nav-link dropdown-toggle text-white gap-3" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                                <i class="text-white gap-3 ph ph-user h-4"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-100">{{ auth()->user()->name }}</span>
                            </a>
                        </li>
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

<!-- Container for Search Results -->
<div id="searchResults" class="mt-4 ml-4"></div>

<script async>
    // Function to hide the navbar
    function hideNavbar() {
        document.getElementById("topbar").style.display = "none";
    }
</script>

<!-- JavaScript -->
<script>
    const originalContent = [
        "File 1: INTERNET OF THINGS, SEJARAH, TEKNOLOGI DAN PENERAPANNYA : REVIEW",
        "File 2: Analisis Situasi Kesehatan Mental pada Masyarakat di Indonesia dan Strategi Penanggulangannya",
        "File 3: Rancang Bangun Sistem Perpustakaan untuk Jurnal Elektronik",
        "File 4: PENDAMPINGAN MENINGKATKAN KEMAMPUAN MAHASISWA DALAM MENULIS JURNAL ILMIAH",
        "File 5: Rancang Bangun Website Jurnal Ilmiah Bidang Komputer (Studi Kasus : Program Studi Ilmu Komputer Universitas Mulawarman)"
    ];

    <!-- JavaScript -->
<script>
    // Function to get all content items dynamically
    const getOriginalContent = () => {
        return Array.from(document.querySelectorAll(' daftar-konten')).map(item => item.textContent);
    };

    // Event listener for the search button
    document.getElementById('searchButton').addEventListener('click', function () {
        const query = document.getElementById('searchInput').value.trim().toLowerCase();
        const contentItems = document.querySelectorAll('daftar-konten');
        const originalContent = getOriginalContent(); // Dynamically retrieve the content list

        contentItems.forEach(item => {
            const text = item.textContent.toLowerCase();
            if (text.includes(query)) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });

        // Reset if search is empty
        if (!query) {
            contentItems.forEach(item => item.style.display = '');
        }
    });
</script>