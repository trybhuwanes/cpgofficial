@extends('layouts.app-layout')

@section('title', 'CSR')

@section('content')

    {{-- SECTION 1 COVER --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-96 lg:h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('/images/hero image.png') }}">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-6xl lg:text-4xl text-black text-center font-semibold">CSR (Corporate Social Responsibility)</h1>
            </div>
        </div>
    </div>

    {{-- SECTION 2 DESCRIPTION --}}
    <div data-aos="lg:fade-up-up" data-aos-duration="1500" class="mx-16 lg:mx-36 mt-16 lg:mt-10">
        <p class="text-2xl lg:text-base font-normal text-black text-justify">
            PT Citra Prestasi Gemilang memahami bahwa keberhasilan sebuah perusahaan tidak hanya diukur dari segi keuangan, 
            tetapi juga dari dampaknya terhadap masyarakat dan lingkungan sekitar. 
            Melalui Program Corporate Social Responsibility (CSR) kami, kami berkomitmen untuk memberikan kontribusi positif 
            bagi masyarakat dan lingkungan. 
            Bersama-sama, mari kita wujudkan perubahan yang berarti dan menciptakan masa depan yang lebih baik untuk semua.
        </p>
    </div>

    {{-- SECTION 3  AGENDA TERDEKAT --}}
    <div class="bg-white max-w-full h-auto text-center">
        <div data-aos="lg:fade-up-up" data-aos-duration="1500" class="flex flex-col justify-center mt-20">
            <div class="text-6xl lg:text-4xl font-bold text-black max-w-full mb-14">
                Agenda Terdekat
            </div>

            <div data-aos="lg:fade-up-up" data-aos-duration="1500" class="grid lg:grid-cols-3 grid-cols-1 gap-10 lg:mx-52 mx-16 mb-12 sm:content-center place-items-center">
                @foreach ($csr as $item)
                    <div
                    class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 xl:w-full lg:w-full sm:w-2/3 h-auto border border-gray-200 rounded-lg shadow-2xl ">
                        <a href="{{ route('csr.detail', $item->slug_csr) }}">
                            <img class="object-cover w-full rounded-t-lg place-items-center" src="{{ asset('assets/img/'. $item->pict_csr) }}" alt="{{ $item->pict_csr }}" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    {{-- SECTION 4 CSR GALLERY --}}
    <div data-aos="lg:fade-up-up" data-aos-duration="1500" class="mx-16 lg:mx-36 mb-5 my-10">
        <h5 class="mb-2 text-5xl lg:text-3xl font-bold tracking-tight text-black">CSR Gallery</h5>
    </div>
    <div data-aos="lg:fade-up-up" data-aos-duration="1500" class="grid lg:grid-cols-3 grid-cols-2 gap-4 mx-16 lg:mx-36 mb-16">
        {{-- CARD FOTO 1 --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-36 object-cover w-full rounded-t-lg" src="{{ asset('images\csr\csr-2024-charity.jpeg') }}" alt="CSR Maret 2024 Charity" />
            <div class="px-5 py-3">
                <h6 class="text-lg font-bold tracking-tight text-black dark:text-black">CSR 2024 Charity Event
                </h6>
                <p class="text-sm text-black dark:text-black">Maret 2024</p>
            </div>
        </div>

        {{-- CARD FOTO 2  --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-36 object-cover w-full rounded-t-lg" src="{{ asset('images\csr\csr-mei-2023-digital-office.jpg') }}" alt="CSR Mei 2023 Digital Office" />
            <div class="px-5 py-3">
                <h6 class="text-lg font-bold tracking-tight text-black dark:text-black">CSR 2023 Digital Office
                </h6>
                <p class="text-sm text-black dark:text-black">Mei 2023</p>
            </div>
        </div>
    </div>

@endsection
