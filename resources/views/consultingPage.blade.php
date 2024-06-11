@extends('layouts.app-layout')

@section('title', 'Consulting')

@section('content')

    {{-- SECTION 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-96 lg:h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('/images/hero image.png') }}">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-6xl lg:text-4xl text-black font-semibold">CONSULTING</h1>
            </div>
        </div>
    </div>

    {{-- SECTION 2 DESCRIPTION --}}
    <div data-aos="lg:fade-up" data-aos-duration="1500" class="mx-16 my-24 lg:mx-36 lg:my-20">
        <p class="text-2xl lg:text-base font-normal text-black text-justify">
            Citra Prestasi Gemilang tidak hanya menawarkan layanan konsultasi. Kami membantu Anda mengubah potensi bisnis
            menjadi kenyataan.
            Dari merencanakan acara hingga memperkuat operasional, kami memiliki solusi yang Anda butuhkan, diantaranya:
        </p>
        <ol class="text-2xl lg:text-base space-y-1 text-black list-decimal list-inside">
            {{-- REVISI  --}}
            <li>Minat dan Bakat</li>
            <li>Parenting</li>
            <li>Harmonisasi Suami</li>
            <li>Pengembangan Usaha Kecil Mandiri </li>
            <li>Berdamai dengan Diri Sendiri</li>

            {{-- <li>Management Event</li>
            <li>Industri-Based Curriculum</li>
            <li>Teaching Factory</li>
            <li>Internship</li>
            <li>Standard Operating Procedure</li>
            <li>Coaching</li> --}}
        </ol>
    </div>

    {{-- SECTION 3 PROFILE COACH --}}
    <div class="bg-black max-w-full h-auto text-center py-28 lg:py-24">
        <div data-aos="lg:fade-up" data-aos-duration="1500" class="text-6xl lg:text-5xl text-white mb-12 font-bold">
            Profile Coach
        </div>

        <div class="flex items-center justify-center lg:flex-row flex-col mx-16 lg:mx-36 mt-8">
            <div data-aos="lg:fade-up" data-aos-duration="1500"
                class="h-auto w-3/4 lg:w-auto lg:mt-0 mt-5 bg-white rounded-xl shadow-2xl dark:bg-white dark:border-gray-100 xl:mx-5">
                <img class="block lg:h-72 h-[510px] object-cover w-full rounded-t-lg"
                    src="{{ asset('/images/foto-bu-sri.jpg') }}" alt="Sri Sudarwati - Coach" />
                <div class="px-5 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">Sri
                        Sudarwati
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Coach, CEO PT Citra Prestasi
                        Gemilang <br> Certified IALC. DCN/LCP/2018/000083 <br> Certified 3.0 Coaching Academy Ary Ginanjar
                    </p>
                </div>
            </div>
        </div>

        <div class="flex lg:items-end items-center justify-center lg:flex-row flex-col mx-16 lg:mx-36 mt-8 gap-5">
            <div data-aos="lg:fade-up" data-aos-duration="1500"
                class="lg:w-1/3 w-3/4 h-fit p-1 bg-white rounded-xl shadow-xl items-end">
                <img class="rounded-xl" src="{{ asset('/images/sertif-coach-1.jpg') }}" alt="">
            </div>
            <div data-aos="lg:fade-up" data-aos-duration="1500"
                class="lg:w-1/3 w-3/4 h-fit p-1 xl:mt-0 bg-white rounded-xl shadow-xl items-end">
                <img class="rounded-xl" src="{{ asset('/images/sertif-coach-2.jpg') }}" alt="">
            </div>
            <div data-aos="lg:fade-up" data-aos-duration="1500"
                class="lg:w-1/3 w-3/4 h-fit p-1 bg-white rounded-xl shadow-xl items-end">
                <img class="rounded-xl" src="{{ asset('/images/sertif-sekolah-ceo.jpg') }}" alt="">
            </div>
        </div>
    </div>

    {{-- SECTION 4 CONSULTANT AT CPG --}}
    <div class="bg-orange-500 max-w-full h-auto text-center py-28 lg:py-24">
        <div data-aos="lg:fade-up" data-aos-duration="1500" class="text-6xl lg:text-5xl text-white mb-12 font-bold">
            Consultant at CPG
        </div>

        <div data-aos="lg:fade-up" data-aos-duration="1500" class="grid lg:grid-cols-5 grid-cols-2 gap-4 mx-16 lg:mx-36">
            {{-- CARD FOTO 1 --}}
            <div class="lg:h-96 h-[450px] bg-white border rounded-lg shadow-2xl">
                <img class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/consultant/bu sri.jpg') }}"
                    alt="Sri Sudarwati - Softskill & Self Development Consultant" />
                <div class="px-5 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">Sri
                        Sudarwati
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Softskill & Self Development
                        Consultant</p>

                </div>
            </div>

            {{-- CARD FOTO 2 --}}
            <div class="lg:h-96 h-[450px] bg-white border rounded-lg shadow-2xl"> 
                <img
                    class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/consultant/bayu.jpg') }}" alt="Edy Bayu Sudarmanto - APU PPT consultant" />
                <div class="px-5 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">Edy Bayu
                        Sudarmanto
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">APU PPT consultant</p>

                </div>
            </div>

            {{-- CARD FOTO 3 --}}
            <div class="lg:h-96 h-[450px] bg-white border rounded-lg shadow-2xl"> 
                <img
                    class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/consultant/evie.jpg') }}"
                    alt="Evie Dhiani - Praktisi Hospitality & Digital Marketing" />
                <div class="px-5 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">Evie
                        Dhiani
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Praktisi Hospitality & Digital
                        Marketing</p>

                </div>
            </div>

            {{-- CARD FOTO 4 --}}
            <div class="lg:h-96 h-[450px] bg-white border rounded-lg shadow-2xl"> 
                <img
                    class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/consultant/indra.jpg') }}" alt="Indra Febrianto - Methodology Trainer" />
                <div class="px-5 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">Indra
                        Febrianto
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Methodology Trainer</p>

                </div>
            </div>

            {{-- CARD FOTO 5 --}}
            <div class="lg:h-96 h-[450px] bg-white border rounded-lg shadow-2xl"> 
                <img
                    class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/consultant/yunita.jpg') }}" alt="Yunita - Admin Professional & Humas Protocol" />
                <div class="px-5 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">Yunita
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Admin Professional & Humas
                        Protocol</p>

                </div>
            </div>
        </div>
    </div>

    {{-- SECTION 5 --}}
    <div class="flex flex-wrap mx-16 lg:mx-36 py-28 lg:py-20">
        <div data-aos="lg:fade-up" data-aos-duration="1500" class="xl:w-1/2 sm:w-full lg:pr-10 pr-0 mb-5 lg:mb-0">
            <img class="w-full aspect-square object-cover rounded-xl shadow-xl" src="images\consulting.png" alt="Poster">
        </div>
        <div data-aos="lg:fade-up" data-aos-duration="1500"
            class="xl:w-1/2 sm:w-full h-auto p-12 xl:mt-0 sm:mt-5 bg-white rounded-[20px] shadow-xl border border-neutral-500 flex-col justify-start items-start gap-5 inline-flex">
            <p class="text-2xl lg:text-base font-medium text-black">
                Citra Prestasi Gemilang adalah mitra strategis yang membantu mengubah tantangan bisnis menjadi peluang
                sukses.
                Dengan pengalaman yang luas dan pendekatan yang inovatif, kami bekerja sama dengan Anda untuk:
            </p>

            <ul class="text-2xl lg:text-base max-w-md space-y-1 text-black list-disc list-inside font-medium">
                <li>Mengidentifikasi masalah utama dalam bisnis Anda.</li>
                <li>Membangun strategi yang efektif untuk mengatasi tantangan tersebut.</li>
                <li>Menerapkan solusi yang praktis dan terukur.</li>
                <li>Mengoptimalkan kinerja dan pertumbuhan bisnis Anda.</li>
            </ul>

            <p class="text-2xl lg:text-base font-medium text-black">
                Jadi, jika Anda ingin mencapai potensi penuh bisnis Anda, bergabunglah dengan kami di Citra Prestasi
                Gemilang.
                Bersama-sama kita akan menghadapi masa depan dengan keyakinan dan keberhasilan!
            </p>

            <a href="https://wa.me/62811360215" target="_blank">
                <button type="button"
                    class="text-2xl lg:text-base text-white bg-black hover:bg-orange-500 focus:outline-none focus:ring-4 font-medium rounded-full px-10 py-6 lg:px-8 lg:py-4 text-center">Register</button>
            </a>
        </div>
    </div>



@endsection
