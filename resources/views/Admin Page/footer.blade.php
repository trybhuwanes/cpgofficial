<footer class="bg-black py-4">
    @vite('resources/css/app.css')

        <div class="container mx-auto justify-between items-top pt-10 px-10">
            <div class="flex pb-6">
                <!-- Kolom pertama -->
            <div class="w-1/3 ml-36">
                {{-- <h3 class="text-white text-lg font-semibold mb-2">Kolom Pertama</h3> --}}
                <img src="{{ asset('images\iconCPG.png') }}" alt="Logo" class="h-14 mr-2 mb-2">
                <div class="text-white text-sm mb-5">
                    Tempus congue tellus semper sapien urna. <br>
                     Tellus posuere ut.
                </div>
                <div class="flex">
                    <img class="h-5 mr-5" src="{{ asset('images/iconLinkedin.png') }}" alt="">
                    <img class="h-5 mr-5" src="{{ asset('images/iconInstagram.png') }}" alt="">
                    <img class="h-5 mr-5" src="{{ asset('images/iconTiktok.png') }}" alt="">
                    <img class="h-5 mr-5" src="{{ asset('images/iconYoutube.png') }}" alt="">
                </div>
            </div>
    
            <!-- Kolom kedua -->
            <div class="w-1/3">
                <h3 class="text-white text-lg font-semibold mb-2">Company</h3>
                <ul class="text-white">
                    <li class="mb-2"><a href="/about" class="mb-2hover:text-white">About Us</a></li>
                    <li class="mb-2"><a href="/terms" class="mb-2hover:text-white">Programs</a></li>
                    <li class="mb-2"><a href="/privacy" class="mb-2hover:text-white">Schedule</a></li>
                    <li class="mb-2"><a href="/privacy" class="mb-2hover:text-white">Blog</a></li>
    
                </ul>
            </div>
    
            <!-- Kolom ketiga -->
            <div class="w-1/3 mr-16">
                <h3 class="text-white text-lg font-semibold mb-2">Address</h3>
                <ul class="text-white">
                    <li class="mb-2"><a href="#" class="hover:text-gray-300">Jl. Layur 1/12 Malang 62142, Jawa Timur 65142</a></li>
                </ul>
            </div>
            </div>
    
            <hr class="border-orange-500 my-4">
            <span class="text-white text-sm ml-36">© 2024 Citra Prestasi Gemilang</span>
        </div>
</footer>

