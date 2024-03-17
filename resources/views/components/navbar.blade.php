<nav class="bg-white">
    @vite('resources/css/app.css')

    <div class="container mx-auto flex justify-between items-center py-4 lg:px-20">
        <a href="/" class="flex items-center">
            <img src="{{ asset('images/iconCPG.png') }}" alt="Gemilang Icon" class="h-14 mr-2">
        </a>

        <!-- Tombol hamburger untuk mode mobile -->
        <button class="text-black focus:outline-none lg:hidden" id="mobile-menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Daftar menu -->
        <ul class="hidden lg:flex space-x-4" id="menu-items">
            <li><a href="/about" class="inline-block px-4 py-2 text-black hover:text-gray-300">About Us</a></li>
            <li><a href="/program" class="inline-block px-4 py-2 text-black hover:text-gray-300">Program</a></li>
            <li><a href="/schedule" class="inline-block px-4 py-2 text-black hover:text-gray-300">Schedule</a></li>
            <li><a href="/blog" class="inline-block px-4 py-2 text-black hover:text-gray-300">Blog</a></li>
            <li><a href="/collaboration" class="inline-block px-4 py-2 text-black hover:text-gray-300">Collaboration</a></li>
            <li><a href="/cerita-umkm" class="inline-block px-4 py-2 text-black hover:text-gray-300">Cerita UMKM</a></li>
            <li><a href="/contact" class="inline-block px-4 py-2 rounded-full bg-orange-500 text-white font-bold text-center">Hubungi Kami</a></li>
        </ul>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const menuItems = document.getElementById('menu-items');

        mobileMenuButton.addEventListener('click', function() {
            menuItems.classList.toggle('hidden');
        });
    });
</script>
