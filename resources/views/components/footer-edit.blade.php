<footer class="bg-black py-4">
    @vite('resources/css/app.css')

    <div class="container mx-auto justify-between items-top pt-10 xl:px-10 sm:px-0">
        <div class="flex pb-6">
            <!-- Kolom pertama -->
            <div class="w-2/5 xl:ml-36 sm:ml-0">
                {{-- <h3 class="text-white text-lg font-semibold mb-2">Kolom Pertama</h3> --}}
                <img src="{{ asset('images\iconCPG.png') }}" alt="Logo" class="h-14 mr-2 mb-2">
                <div class="text-white xl:text-sm sm:text-lg mb-5 sm:w-3/4">
                    The most preferable training, coaching and learning institution in Indonesia.
                </div>
                <div class="flex">
                    <a href="https://id.linkedin.com/company/citraprestasigemilang" target="_blank"><img class="h-5 mr-5"
                            src="{{ asset('images/iconLinkedin.png') }}" alt=""></a>
                    <a href="https://www.instagram.com/citraprestasigemilang/" target="_blank"><img class="h-5 mr-5"
                            src="{{ asset('images/iconInstagram.png') }}" alt=""></a>
                    <a href="https://www.tiktok.com/@cpg_official?_t=8mf2P8krSwS&_r=1" target="_blank"><img
                            class="h-5 mr-5" src="{{ asset('images/iconTiktok.png') }}" alt=""></a>
                    <a href="http://www.youtube.com/@citraprestasigemilang655" target="_blank"><img class="h-5 mr-5"
                            src="{{ asset('images/iconYoutube.png') }}" alt=""></a>
                </div>
            </div>

            <!-- Kolom kedua -->
            <div class="w-1/5">
                <h3 class="text-white xl:text-lg sm:text-xl font-semibold mb-2">Program</h3>
                <ul class="text-white">
                    <li class="mb-2"><a href="{{ route('training') }}" class="mb-2 hover:text-orange-500">Training</a>
                    </li>
                    <li class="mb-2"><a href="{{ route('consulting') }}"
                            class="mb-2 hover:text-orange-500">Consulting</a></li>
                    <li class="mb-2"><a href="{{ route('organizing') }}"
                            class="mb-2 hover:text-orange-500">Organizing</a></li>
                    <li class="mb-2"><a href="{{ route('assesment-center') }}"
                            class="mb-2 hover:text-orange-500">Assesment Center</a></li>
                    <li class="mb-2"><a href="{{ route('internship') }}"
                            class="mb-2 hover:text-orange-500">Internship</a></li>
                    <li class="mb-2"><a href="{{ route('csr') }}" class="mb-2 hover:text-orange-500">CSR</a></li>
                </ul>
            </div>

            {{-- Kolom Ketiga  --}}
            <div class="w-1/5">
                <h3 class="text-white xl:text-lg sm:text-xl font-semibold mb-2">Company</h3>
                <ul class="text-white">
                    <li class="mb-2"><a href="{{ route('about') }}" class="mb-2 hover:text-orange-500">About Us</a>
                    </li>
                    <li class="mb-2"><a href="{{ route('schedule') }}"
                            class="mb-2 hover:text-orange-500">Schedule</a></li>
                    <li class="mb-2"><a href="{{ route('blog') }}" class="mb-2 hover:text-orange-500">Blog</a></li>
                    <li class="mb-2"><a href="{{ route('collaboration') }}"
                            class="mb-2 hover:text-orange-500">Collaboration</a></li>
                    <li class="mb-2"><a href="{{ route('cerita-umkm') }}" class="mb-2 hover:text-orange-500">Cerita
                            UMKM</a></li>
                </ul>
            </div>

            <!-- Kolom keempat -->
            <div class="w-1/5 xl:mr-16 sm:mr-5">
                <h3 class="text-white xl:text-lg sm:text-xl font-semibold mb-2">Address</h3>
                <ul class="text-white">
                    <li class="mb-2"><a href="#" class="hover:text-gray-300">Jl. Layur 1/12 Malang 62142, Jawa
                            Timur 65142</a></li>
                </ul>
            </div>
        </div>

        <hr class="border-orange-500 my-4">
        <span class="text-white text-sm xl:ml-36 sm:ml-5">© 2024 Citra Prestasi Gemilang</span>
    </div>
</footer>
