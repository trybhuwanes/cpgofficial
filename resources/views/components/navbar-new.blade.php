<nav class="bg-white border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 px-10 lg:px-20">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/iconCPG.png') }}" class="h-8" alt="CPG" />
        </a>
        {{-- <a href="/" class="flex items-center">
        <img src="{{ asset('images/iconCPG.png') }}" alt="Gemilang Icon" class="h-20 lg:h-12 lg:mr-2">
    </a> --}}
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200aria-controls="navbar-dropdown"
            aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0">About Us</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 md:w-auto">Program
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('training') }}" class="block px-4 py-2 hover:bg-orange-300">Training</a>
                            </li>
                            <li>
                                <a href="{{ route('consulting') }}" class="block px-4 py-2 hover:bg-orange-300">Consulting</a>
                            </li>
                            <li>
                                <a href="{{ route('organizing') }}" class="block px-4 py-2 hover:bg-orange-300">Organizing</a>
                            </li>
                            <li>
                                <a href="{{ route('assesment-center') }}" class="block px-4 py-2 hover:bg-orange-300">Assesment Center</a>
                            </li>
                            <li>
                                <a href="{{ route('internship') }}" class="block px-4 py-2 hover:bg-gray-100">Internship</a>
                            </li>
                            <li>
                                <a href="{{ route('csr') }}" class="block px-4 py-2 hover:bg-orange-300">CSR</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('training') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0">Schedule</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0">Blog</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0">Collaboration</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0">Cerita UMKM</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
