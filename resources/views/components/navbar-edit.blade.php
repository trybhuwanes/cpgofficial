<nav class="bg-white">
    @vite('resources/css/app.css')

    <div class="container mx-auto flex justify-between items-center xl:py-4 sm:py-14 lg:px-20">
        <a href="/" class="flex items-center">
            <img src="{{ asset('images/iconCPG.png') }}" alt="Gemilang Icon" class="xl:h-12 sm:h-20 mr-2">
        </a>

        <!-- Tombol hamburger untuk mode mobile -->
        <button class="text-black focus:outline-none lg:hidden" id="mobile-menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="xl:h-6 xl:w-6 sm:h-14 sm:w-14" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Daftar menu -->
        <ul class="xl:text-base sm:text-4xl hidden lg:flex space-x-4" id="menu-items">
            <li><a href="/about" class="inline-block xl:px-3 xl:py-2 sm:pl-3 sm:py-4 text-black hover:text-gray-300">About Us</a></li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                    class="flex items-center justify-between w-full py-4 xl:px-7 xl:py-2 rounded text-black hover:text-gray-300 focus:text-black">Program
                    <svg class="xl:w-2.5 xl:h-2.5 xl:ms-2.5 sm:w-5 sm:h-5 sm:ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow xl:w-44 sm:w-80">
                    <ul class="xl:py-2 sm:py-4 xl:text-base sm:text-3xl text-black" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="{{ route('training') }}" class="block xl:px-4 xl:py-2 sm:px-8 sm:py-3 hover:bg-orange-500">Training</a>
                        </li>
                        <li>
                            <a href="{{ route('consulting') }}" class="block xl:px-4 xl:py-2 sm:px-8 sm:py-3 hover:bg-orange-500">Consulting</a>
                        </li>
                        <li>
                            <a href="{{ route('organizing') }}"
                                class="block xl:px-4 xl:py-2 sm:px-8 sm:py-3 hover:bg-orange-500">Organizing</a>
                        </li>
                        <li>
                            <a href="{{ route('assesment-center') }}" class="block xl:px-4 xl:py-2 sm:px-8 sm:py-3 hover:bg-orange-500">Assesment Center</a>
                        </li>
                        <li>
                            <a href="{{ route('internship') }}"
                                class="block xl:px-4 xl:py-2 sm:px-8 sm:py-3 hover:bg-orange-500">Internship</a>
                        </li>
                        <li>
                            <a href="{{ route('csr') }}" class="block xl:px-4 xl:py-2 sm:px-8 sm:py-3 hover:bg-orange-500">CSR</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="{{ route('schedule') }}" class="inline-block xl:px-3 xl:py-2 sm:py-4 text-black hover:text-gray-300">Schedule</a></li>
            <li><a href="{{ route('blog') }}" class="inline-block xl:px-3 xl:py-2 sm:py-4 text-black hover:text-gray-300">Blog</a></li>
            <li><a href="{{ route('collaboration') }}" class="inline-block xl:px-3 xl:py-2 sm:py-4 text-black hover:text-gray-300">Collaboration</a>
            </li>
            <li><a href="{{ route('cerita-umkm') }}" class="inline-block xl:px-3 xl:py-2 sm:py-4 text-black hover:text-gray-300">Cerita UMKM</a>
            </li>
            <li><a href="/contact"
                    class="inline-block xl:px-6 xl:py-2 sm:px-10 sm:py-4 xl:my-0 sm:my-3 rounded-full bg-orange-500 text-white xl:font-bold sm:font-normal text-center hover:bg-black">Contact
                    Us
                </a>
            </li>
            <a href="/login" class="flex items-center">
                <img src="{{ asset('images/login.svg') }}" alt="Login Icon" class="xl:h-10 xl:my-0 sm:h-16 sm:my-4 mr-2">
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
