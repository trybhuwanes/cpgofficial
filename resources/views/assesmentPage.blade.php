@extends('layouts.app-layout')

@section('title', 'Assesment Center')

@section('content')

    {{-- SECTION 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-96 lg:h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('/images/hero image.png') }}">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-6xl lg:text-4xl text-black font-semibold">ASSESMENT CENTER</h1>
            </div>
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div data-aos="lg:fade-up" data-aos-duration="1500" class="mx-16 lg:mx-36 mt-16 lg:mt-10">
        <p class="text-2xl lg:text-base font-normal text-black text-justify">
            Citra Prestasi Gemilang sebagai wadah Assessment Center menyediakan beragam program evaluasi dan pengembangan
            untuk membantu Anda mencapai potensi terbaik Anda. Dari manajemen sumber daya manusia hingga keahlian administratif,
            kami menawarkan layanan yang komprehensif untuk membantu perusahaan dan individu dalam mencapai tujuan mereka.
            Berikut beberapa bidang jasa yang kami tawarkan:<br>
        </p>
        <ol class="text-2xl lg:text-base space-y-1 text-black list-decimal list-inside">
            <li>Modal Manusia</li>
            <ul class="pl-8 space-y-1 text-black list-disc list-inside ">
                <li>Supervisor</li>
                <li>General Manager</li>
                <li>Staff Recruitment</li>
            </ul>
            <li>Profesional Administratif</li>
            <li>Sistem Pengisian (Pengendalian Dokumen)</li>
            <li>Kepuasan Layanan</li>
            <li>Hubungan Masyarakat</li>
            <li>Berbicara di Depan Umum</li>
            <li>UMKM</li>
            <li>Layanan Pelanggan</li>
            <li>Layanan Pembersihan</li>
            <li>Layanan Perhotelan</li>
            <li>K3</li>
            <ul class="pl-8 space-y-1 text-black list-disc list-inside ">
                <li>K3 Umum</li>
                <li>Ahli K3</li>
                <li>K3 Pemadam Kebakaran</li>
                <li>K3 Ketinggian</li>
                <li>K3 Oil dan Gas</li>
            </ul>
            <li>Metodologi</li>
            <ul class="pl-8 space-y-1 text-black list-disc list-inside ">
                <li>ToT KKNI Level 3</li>
                <li>ToT KKNI Level 4</li>
                <li>ToT KKNI Level 6</li>
            </ul>
            <li>Pemasaran Digital</li>
            <ul class="pl-8 space-y-1 text-black list-disc list-inside ">
                <li>Kreator Konten</li>
                <li>Pemasaran Digital</li>
                <li>Pemasaran Media Sosial</li>
            <li>Kewirausahaan</li>
        </ol>
    </div>


    {{-- SECTION 3 --}}
    <div data-aos="lg:fade-up" data-aos-duration="1500" class="mx-16 lg:mx-36 mb-5 my-16 lg:my-10">
        <h5 class="mb-2 text-5xl lg:text-3xl font-bold tracking-tight text-black">Skema</h5>

    </div>
    <div data-aos="lg:fade-up" data-aos-duration="1500" class="grid lg:grid-cols-3 grid-cols-2 gap-4 mx-16 lg:mx-36 mb-16">
        {{-- CARD BLOG SERVICE EXCELLENCE --}}
        @foreach ($assesment as $item)
            <div
                class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100 hover:bg-orange-500">
                <a href="{{ route('assesment-center.detail', $item->slug) }}">
                    <img class="block h-56 lg:h-36 object-cover w-full rounded-t-lg" src="{{ asset('assets/img/' . $item->pict) }}"
                        alt="{{ $item->pict }}" />
                </a>
                <div class="p-5">
                    <a href="{{ route('assesment-center.detail', $item->slug) }}">
                        <h6 class="mb-2 text-3xl lg:text-xl font-bold tracking-tight text-black dark:text-black">{{ $item->title }}</h6>
                    </a>
                </div>
            </div>
        @endforeach

    </div>

@endsection
