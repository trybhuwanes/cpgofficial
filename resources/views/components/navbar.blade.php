<nav class="bg-white">
    @vite('resources/css/app.css')

    <div class="container mx-auto flex justify-between items-center py-4 lg:px-20">
        <a href="/" class="flex items-center">
            <img src="{{ asset('images/iconCPG.png') }}" alt="Gemilang Icon" class="h-12 mr-2">
        </a>

        <!-- Tombol hamburger untuk mode mobile -->
        <button class="text-black focus:outline-none lg:hidden" id="mobile-menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Daftar menu -->
        <ul class="hidden lg:flex space-x-4" id="menu-items">
            <li><a href="/about" class="inline-block px-7 py-2 text-black hover:text-gray-300">About Us</a></li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                    class="flex items-center justify-between w-full py-2 px-3 rounded text-black hover:text-gray-300 focus:text-black">Program
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul class="py-2 text-sm text-black" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-orange-500">Training</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-orange-500">Consulting</a>
                        </li>
                        <li>
                            <a href="{{ route('organizing') }}"
                                class="block px-4 py-2 hover:bg-orange-500">Organizing</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-orange-500">Assesment Center</a>
                        </li>
                        <li>
                            <a href="{{ route('internship') }}"
                                class="block px-4 py-2 hover:bg-orange-500">Internship</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-orange-500">CSR</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="/schedule" class="inline-block px-3 py-2 text-black hover:text-gray-300">Schedule</a></li>
            <li><a href="/blog" class="inline-block px-3 py-2 text-black hover:text-gray-300">Blog</a></li>
            <li><a href="/collaboration" class="inline-block px-3 py-2 text-black hover:text-gray-300">Collaboration</a>
            </li>
            <li><a href="/cerita-umkm" class="inline-block px-3 py-2 text-black hover:text-gray-300">Cerita UMKM</a>
            </li>
            <li><a href="/contact"
                    class="inline-block px-6 py-2 rounded-full bg-orange-500 text-white font-bold text-center">Contact Us
                    </a></li>
            <a href="/login" class="flex items-center">
                <img src="{{ asset('images/login.svg') }}" alt="Login Icon" class="h-10 mr-2">
            </a>


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
