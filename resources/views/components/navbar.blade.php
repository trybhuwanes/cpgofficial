<nav class="bg-white">
    @vite('resources/css/app.css')

    <div class="container mx-auto flex justify-between items-center px-10 py-10 lg:px-20 lg:py-4">
        <a href="/" class="flex items-center">
            <img src="{{ asset('images/iconCPG.png') }}" alt="Gemilang Icon" class="h-16 lg:h-12 lg:mr-2">
        </a>

        <!-- Tombol hamburger untuk mode mobile -->
        <button class="text-black focus:outline-none lg:hidden" id="mobile-menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 lg:h-6 lg:w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Daftar menu -->
        <ul class="text-3xl lg:text-base hidden lg:flex space-x-4" id="menu-items">
            <li><a href="/about" class="inline-block pl-3 py-4 lg:pl-0 lg:px-7 lg:py-2 text-black hover:text-gray-300">About Us</a></li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                    class="flex items-center justify-between w-full py-4 lg:px-3 lg:py-2 rounded text-black hover:text-gray-300 focus:text-black">Program
                    <svg class="w-5 h-5 ms-5 lg:w-2.5 lg:h-2.5 lg:ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-80 lg:w-44">
                    <ul class="py-4 lg:py-2 text-3xl lg:text-base text-black" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="{{ route('training') }}" class="block px-8 py-3 lg:px-4 lg:py-2 hover:bg-orange-500">Training</a>
                        </li>
                        <li>
                            <a href="{{ route('consulting') }}" class="block px-8 py-3 lg:px-4 lg:py-2 hover:bg-orange-500">Consulting</a>
                        </li>
                        <li>
                            <a href="{{ route('organizing') }}"
                                class="block px-8 py-3 lg:px-4 lg:py-2 hover:bg-orange-500">Organizing</a>
                        </li>
                        <li>
                            <a href="{{ route('assesment-center') }}" class="block px-8 py-3 lg:px-4 lg:py-2 hover:bg-orange-500">Assesment Center</a>
                        </li>
                        <li>
                            <a href="{{ route('internship') }}"
                                class="block px-8 py-3 lg:px-4 lg:py-2 hover:bg-orange-500">Internship</a>
                        </li>
                        <li>
                            <a href="{{ route('csr') }}" class="block px-8 py-3 lg:px-4 lg:py-2 hover:bg-orange-500">CSR</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="{{ route('schedule') }}" class="inline-block py-4 lg:px-3 lg:py-2 text-black hover:text-gray-300">Schedule</a></li>
            <li><a href="{{ route('blog') }}" class="inline-block py-4 lg:px-3 lg:py-2 text-black hover:text-gray-300">Blog</a></li>
            <li><a href="{{ route('collaboration') }}" class="inline-block py-4 lg:px-3 lg:py-2 text-black hover:text-gray-300">Collaboration</a>
            </li>
            <li><a href="{{ route('cerita-umkm') }}" class="inline-block py-4 lg:px-3 lg:py-2 text-black hover:text-gray-300">Cerita UMKM</a>
            </li>
            <li><a href="/contact"
                    class="inline-block px-10 py-4 my-3 lg:my-0 lg:px-6 lg:py-2 rounded-full bg-orange-500 text-white font-bold text-center hover:bg-black">Contact
                    Us
                </a>
            </li>
            <a href="/login" class="flex items-center">
                <img src="{{ asset('images/login.svg') }}" alt="Login Icon" class="h-16 my-4 mr-2 lg:h-10 lg:my-0">
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
