@extends('layouts.app-layout')

@section('title', 'Organizing')

@section('content')

    {{-- SECTION 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-96 lg:h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('/images/hero image.png') }}">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-6xl lg:text-4xl text-black font-semibold">ORGANIZING</h1>
            </div>
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div data-aos="lg:fade-up" data-aos-duration="1500" class="mx-16 lg:mx-36 mt-16 lg:mt-10">
        <p class="text-2xl lg:text-base font-normal text-black text-justify">
            Di tengah kesibukan bisnis, kemampuan untuk mengorganisir dengan cermat adalah kunci untuk meraih kesuksesan. 
            Citra Prestasi Gemilang hadir untuk memastikan setiap detail tersusun dengan rapi dan setiap acara berjalan dengan lancar. 
            Mari menjelajahi bagaimana kami mengubah ide menjadi kenyataan dengan keunggulan organisasi kami melalui tema-tema berikut:<br>
        </p>
        <ol class="text-2xl lg:text-base space-y-1 text-black list-decimal list-inside">
            {{-- REVISI  --}}
            <li>Annual Meeting</li> 
            <li>Family Gathering </li>
            <li>Boot Camp </li>
            <li>Wedding</li>
            <li>Membangun Kelas Industri EO</li>
            <li>⁠Wellness</li>
            <li>⁠Meditasi</li>
            <li> ⁠Writing Camp</li>

            {{-- <li>Pertemuan Keluarga</li>
            <li>Penyelenggara Acara</li>
            <li>Publikasi</li>
            <li>Komunikasi Pelanggan</li>
            <li>Agen Rekrutmen</li>
            <li>Outbound</li> --}}
        </ol>
    </div>


    {{-- SECTION 3 --}}
    <div data-aos="lg:fade-up" data-aos-duration="1500" class="mx-16 lg:mx-36 mb-5 my-16 lg:my-10">
        <h5 class="mb-2 text-5xl lg:text-3xl font-bold tracking-tight text-black">Our Activity</h5>
    </div>
    <div data-aos="lg:fade-up" data-aos-duration="1500" class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 mx-16 lg:mx-36 mb-16">
        {{-- CARD FOTO 1 --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-80 lg:h-36 object-cover w-full rounded-t-lg" src="{{ asset('/images/organizing/organizing-1.png') }}" alt="" />
            <div class="px-5 py-3">
                <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black">Outbound SMKN 1 Malang
                </h6>
                <p class="text-2xl lg:text-sm text-black dark:text-black">Kamis, 28 Maret 2024</p>

            </div>
        </div>
    </div>

@endsection
