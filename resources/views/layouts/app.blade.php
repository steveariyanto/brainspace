<nav>
    <div class="flex justify-between items-center p-4">
        <span class="font-bold text-xl">BrainSpace</span>

        @auth
            <span>Hello, {{ Auth::user()->name }}</span>
            <a href="{{ route('logout') }}" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
               class="ml-4 text-blue-500">
               Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <span>Hello, Guest</span>
            <a href="{{ route('login') }}" class="ml-4 text-blue-500">Login</a>
            <a href="{{ route('register') }}" class="ml-4 text-blue-500">Register</a>
        @endauth
    </div>
</nav>