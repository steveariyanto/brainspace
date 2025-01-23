 <head>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
 </head>

 <!-- Sidebar -->
 <!-- <div class="fixed w-[200px] h-screen pt-[50px] bg-gradient-primary sidebar sidebar-dark accordion text-white"> -->
 <div class="fixed w-[225px] h-screen bg-gradient-to-r from-blue-500 to-blue-400 text-white flex flex-col">

 <!-- Sidebar Brand -->
     <!-- <div class="text-center mb-6">
         <h1 class="text-2xl font-bold text-white">BrainSpace</h1>
     </div> -->
     <div class="text-center mb-1 py-8">
        <h1 class="text-2xl font-bold">BrainSpace</h1>
     </div>

     <!-- Divider -->
     <!-- <hr class="sidebar-divider my-0"> -->

     <!-- Navigation -->
     <ul class="space-y-2 px-4">
         <!-- Dashboard -->
         <!-- <li>
             <a href="/"
                 class="flex items-center px-4 py-2 hover:bg-blue-700 hover:text-gray-100 transition duration-200">
                 <i class="fas fa-home mr-4 text-white text-lg"></i>
                 <span>Home</span>
             </a>
         </li> -->
         <li>
            <a href="/dashboard" class="flex items-center p-2 hover:bg-blue-400 hover:text-white-100 rounded transition duration-200">
                <i class="fas fa-home mr-4"></i>
                <span>Home</span>
            </a>
         </li>
         <!-- Daftar Proyek -->
         <!-- <li>
             <a href="/daftar-konten"
                 class="flex items-center px-4 py-2 hover:bg-blue-700 hover:text-gray-100 transition duration-200">
                 <i class="fas fa-clipboard-list mr-4 text-white text-lg"></i>
                 <span>Daftar Proyek</span>
             </a>
         </li> -->
         <li>
            <a href="/daftar-konten" class="flex items-center p-2 hover:bg-blue-400 hover:text-white-100 rounded transition duration-200">
                <i class="fas fa-clipboard-list mr-4"></i>
                <span>Daftar Proyek</span>
            </a>
         </li>

         <!-- Settings -->
         <!-- <li>
             <a href="/notifikasi"
                 class="flex items-center px-4 py-2 hover:bg-blue-700 hover:text-gray-100 transition duration-200">
                 <i class="fas fa-bell mr-4 text-white text-lg"></i>
                 <span>Notifikasi</span>
             </a>
         </li> -->
         <li>
            <a href="/notifikasi" class="flex items-center p-2 hover:bg-blue-400 transition duration-200">
                <i class="fas fa-bell mr-4"></i>
                <span>Notifikasi</span>
            </a>
         </li>
         
         @auth
        <!-- Tombol Logout -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="flex items-center p-2 bg-red-600 hover:bg-red-700 rounded transition duration-200 w-full">
                <i class="fas fa-sign-out-alt mr-4"></i>
                <span>Logout</span>
            </button>
        </form>
        @endauth
          <!-- Footer -->
        <!-- <footer class="py-4 px-4 bg-blue-800 text-bottom">
            <nav>
                <ul class="text-sm space-y-1">
                    <li><a href="#about" class="text-white hover:underline">Tentang Kami</a></li>
                    <li><a href="#services" class="text-white hover:underline">Layanan</a></li>
                    <li><a href="#contact" class="text-white hover:underline">Kontak</a></li>
                </ul>
            </nav>
            <p class="text-xs text-gray-300 mt-2">&copy; 2025 BrainSpace. Semua Hak Dilindungi.</p>
        </footer> -->
</div>
     <!-- </ul>
     <head>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
 </head> -->

 <!-- Sidebar
 <div class="fixed w-[200px] h-screen pt-[50px] bg-gradient-primary sidebar sidebar-dark accordion text-white">
     Sidebar Brand
     <div class="text-center mb-4">
         <h1 class="text-2xl font-bold text-white">BrainSpace</h1>
     </div>

     Divider
     <hr class="sidebar-divider my-0">

     Navigation
     <ul class="space-y-2">
         Dashboard
         <li>
             <a href="/"
                 class="flex items-center px-4 py-2 hover:bg-blue-700 hover:text-white-100 transition duration-200">
                 <i class="fas fa-home mr-4 text-white text-lg"></i>
                 <span>Home</span>
             </a>
         </li>

         Daftar Proyek
         <li>
             <a href="/daftar-konten"
                 class="flex items-center px-4 py-2 hover:bg-blue-700 hover:text-white-100 transition duration-200">
                 <i class="fas fa-clipboard-list mr-4 text-white text-lg"></i>
                 <span>Daftar Proyek</span>
             </a>
         </li>

         Settings
         <li>
             <a href="/notifikasi"
                 class="flex items-center px-4 py-2 hover:bg-blue-700 hover:text-white-100 transition duration-200">
                 <i class="fas fa-bell mr-4 text-white text-lg"></i>
                 <span>Notifikasi</span>
             </a>
         </li>
 -->