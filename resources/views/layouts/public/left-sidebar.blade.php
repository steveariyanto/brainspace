 <head>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
 </head>

 <!-- Sidebar -->
 <div class="fixed w-[200px] h-screen pt-[50px] bg-gradient-primary sidebar sidebar-dark accordion text-white">
     <!-- Sidebar Brand -->
     <div class="text-center mb-4">
         <h1 class="text-2xl font-bold text-white">BrainSpace</h1>
     </div>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Navigation -->
     <ul class="space-y-2">
         <!-- Dashboard -->
         <li>
             <a href="/"
                 class="flex items-center px-4 py-2 hover:bg-blue-700 hover:text-gray-100 transition duration-200">
                 <i class="fas fa-home mr-4 text-white text-lg"></i>
                 <span>home</span>
             </a>
         </li>

         <!-- Daftar Proyek -->
         <li>
             <a href="{{ auth()?->user()?->role == 'admin' ? '/project-approval' : '/daftar-konten' }}"
                 class="flex items-center px-4 py-2 hover:bg-blue-700 hover:text-gray-100 transition duration-200">
                 <i class="fas fa-clipboard-list mr-4 text-white text-lg"></i>
                 <span>Daftar Proyek</span>
             </a>
         </li>

         <!-- Settings -->
         <li>
             <a href="/notifikasi"
                 class="flex items-center px-4 py-2 hover:bg-blue-700 hover:text-gray-100 transition duration-200">
                 <i class="fas fa-bell mr-4 text-white text-lg"></i>
                 <span>Notifikasi</span>
             </a>
         </li>

        @auth
            <li>
                <a href="/profile" class="flex items-center px-4 py-2 hover:bg-blue-700 hover:text-gray-100 transition duration-200">
                    <i class="fas fa-user mr-4 text-white text-lg"></i>
                    <span>Profil</span>
                </a>
            </li>
        @endauth
     </ul>
 </div>
