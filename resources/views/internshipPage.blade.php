@extends('layouts.app-layout')

@section('title', 'Internship')

@section('content')

    {{-- SECTION 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="images\hero image.png">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-4xl text-black font-semibold">INTERNSHIP</h1>
            </div>
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div data-aos="fade-up" data-aos-duration="1000" class="mx-36 mt-10">
        <p class="font-normal text-black text-justify">
            Kami memberikan kesempatan magang dan praktik industri bagi pelajar dari jenjang SMK, 
            Vokasi dan Sarjana dengan berbagai jurusan dan skema pemagangan sebagai berikut : <br>
        </p>
        <ol class="space-y-1 text-black list-decimal list-inside">
            <li>Administrasi Profesional</li>
            <li>Administrasi Bisnis</li>
            <li>Public Relations</li>
            <li>Akuntansi</li>
            <li>Manajemen</li>
            <li>Perpajakan</li>
            <li>Teknologi Informatika (IT)</li>
        </ol> <br>
        <p class="font-normal text-black text-justify">
            Durasi kegiatan magang/praktik industri berlangsung selama minimal 1 bulan dan maksimal 6 bulan 
            dengan memberikan bekal bagi peserta magang sesuai dengan kebutuhan industri. 
            Pemagangan Citra Prestasi Gemilang mengacu pada Peraturan Menteri Ketenagakerjaan Nomor 6 Tahun 2020 
            tentang Penyelenggaraan Pemagangan di Dalam Negeri. Terdapat 3 syarat pemagangan industri, yaitu Program, Mentor/Praktisi Industri, dan Fasilitas <br><br>
            Sejak tahun 2017, Citra Prestasi Gemilang telah menjalin kerja sama dengan Kementerian Kebudayaan RI, 
            Perguruan Tinggi/Universitas Se-Jawa Timur, Instansi, BUMN, dan SMK Se-Malang Raya. Serta, sampai saat ini masih 
            terus membuka kesempatan untuk penerimaan peserta program magang/praktik industri. <br>
        </p>
    </div>


    {{-- SECTION 3 --}}
    {{-- PERGURUAN TINGGI --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 mb-5 my-10">
        <h5 class="mb-3 text-3xl font-bold tracking-tight text-black">Internship Activity</h5>
        <h5 class="text-xl font-bold">Perguruan Tinggi</h5>
        <hr class="h-px my-3 border-0 bg-gray-800">
    </div>
    <div data-aos="fade-up" data-aos-duration="1500" class="grid grid-cols-3 gap-4 mx-36">
        {{-- CARD FOTO 1 --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-36 object-cover w-full rounded-t-lg" src="images\internbg.png" alt="" />
            <div class="px-5 py-3">
                <h6 class="text-lg font-bold tracking-tight text-black dark:text-black">Noteworthy technology acquisitions
                </h6>
                <p class="text-sm text-black dark:text-black">Kamis, 28 Maret 2024</p>

            </div>
        </div>

        {{-- CARD FOTO 2 --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-36 object-cover w-full rounded-t-lg" src="images\internbg.png" alt="" />
            <div class="px-5 py-3">
                <h6 class="text-lg font-bold tracking-tight text-black dark:text-black">Noteworthy technology acquisitions
                </h6>
                <p class="text-sm text-black dark:text-black">Kamis, 28 Maret 2024</p>

            </div>
        </div>

        {{-- CARD FOTO 3 --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-36 object-cover w-full rounded-t-lg" src="images\internbg.png" alt="" />
            <div class="px-5 py-3">
                <h6 class="text-lg font-bold tracking-tight text-black dark:text-black">Noteworthy technology acquisitions
                </h6>
                <p class="text-sm text-black dark:text-black">Kamis, 28 Maret 2024</p>

            </div>
        </div>
    </div>


    {{-- SMK --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 mb-5 my-10">
        <h5 class="text-xl font-bold">Sekolah Menengah Kejuruan (SMK)</h5>
        <hr class="h-px my-3 border-0 bg-gray-800">
    </div>

    <div data-aos="fade-up" data-aos-duration="1500" class="grid grid-cols-3 gap-4 mx-36 mb-16">
        {{-- CARD FOTO 1 --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-36 object-cover w-full rounded-t-lg" src="images\internbg.png" alt="" />
            <div class="px-5 py-3">
                <h6 class="text-lg font-bold tracking-tight text-black dark:text-black">Noteworthy technology acquisitions
                </h6>
                <p class="text-sm text-black dark:text-black">Kamis, 28 Maret 2024</p>

            </div>
        </div>

        {{-- CARD FOTO 2 --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-36 object-cover w-full rounded-t-lg" src="images\internbg.png" alt="" />
            <div class="px-5 py-3">
                <h6 class="text-lg font-bold tracking-tight text-black dark:text-black">Noteworthy technology acquisitions
                </h6>
                <p class="text-sm text-black dark:text-black">Kamis, 28 Maret 2024</p>

            </div>
        </div>

        {{-- CARD FOTO 3 --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-36 object-cover w-full rounded-t-lg" src="images\internbg.png" alt="" />
            <div class="px-5 py-3">
                <h6 class="text-lg font-bold tracking-tight text-black dark:text-black">Noteworthy technology acquisitions
                </h6>
                <p class="text-sm text-black dark:text-black">Kamis, 28 Maret 2024</p>

            </div>
        </div>
    </div>
@endsection
