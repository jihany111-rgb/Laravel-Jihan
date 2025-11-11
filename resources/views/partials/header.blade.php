<header class="gradient-bg shadow-lg sticky top-0 z-50">
    <nav class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <!-- Logo Image -->
                    <div class="w-10 h-10 rounded-lg overflow-hidden bg-white flex items-center justify-center shadow-md transition-transform duration-300 group-hover:scale-105">
                        <img src="{{ asset('images/logo-jigel.png') }}" alt="Logo JIGEL" class="w-full h-full object-cover">
                    </div>
                    <!-- Brand Name -->
                    <span class="text-white font-bold text-xl tracking-wide hidden sm:block group-hover:text-yellow-300 transition-colors duration-300">
                        JIGEL
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}"
                   class="text-white hover:text-yellow-300 transition-colors duration-300 font-semibold {{ request()->routeIs('home') ? 'text-yellow-300' : '' }}">
                    Beranda
                </a>
                <a href="{{ route('projects') }}"
                   class="text-white hover:text-yellow-300 transition-colors duration-300 font-semibold {{ request()->routeIs('projects') ? 'text-yellow-300' : '' }}">
                    Proyek
                </a>
                <a href="{{ route('contact') }}"
                   class="text-white hover:text-yellow-300 transition-colors duration-300 font-semibold {{ request()->routeIs('contact') ? 'text-yellow-300' : '' }}">
                    Kontak
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-white p-2 focus:outline-none transition-transform hover:scale-110">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="hidden md:hidden fixed inset-0 bg-black bg-opacity-40 backdrop-blur-sm z-40">
        <div class="fixed right-0 top-0 bottom-0 w-64 gradient-bg shadow-xl flex flex-col">

            <!-- Close Button -->
            <div class="flex justify-end p-5">
                <button id="close-mobile-menu" class="text-white hover:text-yellow-300 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Links -->
            <div class="px-6 py-4 space-y-4">
                <a href="{{ route('home') }}"
                   class="block text-white hover:text-yellow-300 py-3 font-semibold border-b border-white/10 transition {{ request()->routeIs('home') ? 'text-yellow-300' : '' }}">
                    Beranda
                </a>
                <a href="{{ route('projects') }}"
                   class="block text-white hover:text-yellow-300 py-3 font-semibold border-b border-white/10 transition {{ request()->routeIs('projects') ? 'text-yellow-300' : '' }}">
                    Proyek
                </a>
                <a href="{{ route('contact') }}"
                   class="block text-white hover:text-yellow-300 py-3 font-semibold border-b border-white/10 transition {{ request()->routeIs('contact') ? 'text-yellow-300' : '' }}">
                    Kontak
                </a>
                <a href="{{ route('contact') }}"
                   class="block bg-white text-primary text-center px-6 py-3 rounded-lg font-semibold hover:bg-yellow-400 hover:text-white transition-all duration-300 mt-6 shadow">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Script: Mobile Menu Toggle -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const menuBtn = document.getElementById("mobile-menu-btn");
    const closeBtn = document.getElementById("close-mobile-menu");
    const menu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => menu.classList.remove("hidden"));
    closeBtn.addEventListener("click", () => menu.classList.add("hidden"));
});
</script>
