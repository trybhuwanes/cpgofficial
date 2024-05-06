@extends('layouts.app-layout')

@section('title', 'CSR')

@section('content')

    {{-- SECTION 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="images\hero image.png">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-4xl text-black font-semibold">CSR (Corporate Social Responsibility)</h1>
            </div>
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 mt-10">
        <p class="font-normal text-black text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porta urna nibh, non porta libero molestie eu. 
            Sed ac erat sem. Nam id magna condimentum, aliquam nulla ut, posuere tellus. 
            Praesent quam ex, varius eget dui sed, bibendum fermentum sem. In hac habitasse platea dictumst. 
            Phasellus luctus nibh quis nulla dapibus viverra. Proin cursus condimentum ante, sed pulvinar sapien. 
            Fusce semper ultricies quam at volutpat. Vivamus faucibus massa rutrum felis congue dignissim. 
            Nulla ultricies nulla eu sem tincidunt pretium. Maecenas euismod laoreet urna, a lobortis dolor lacinia id. 
            Etiam in varius erat, eu aliquam tellus. Aliquam feugiat cursus sodales. Aliquam vel diam vitae felis convallis finibus. 
            Vestibulum mattis justo metus, blandit faucibus dui posuere elementum.
        </p>
    </div>

    {{-- SECTION 3  --}}
    <div class="bg-white max-w-full h-auto text-center">
        <div data-aos="fade-up" data-aos-duration="1500" class="flex flex-col justify-center mt-20">
            <div class="text-4xl font-bold text-black max-w-full mb-14">
                Agenda Terdekat
            </div>

            <div data-aos="fade-up" data-aos-duration="1500" class="grid xl:grid-cols-3 lg:grid-cols-2 sm:grid-cols-1 gap-10 mx-52 sm:mx-36 mb-12 sm:content-center place-items-center">
                {{-- CARD BLOG --}}
                <div
                    class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 xl:w-full lg:w-full sm:w-2/3 h-auto border border-gray-200 rounded-lg shadow-2xl ">
                    <a href="{{ route('blog-read') }}">
                        <img class="object-cover w-full rounded-t-lg place-items-center" src="images\Flyer CSR 2024.png" alt="" />
                    </a>
                </div>

                <div
                    class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 xl:w-full lg:w-full sm:w-2/3 h-auto border border-gray-200 rounded-lg shadow-2xl ">
                    <a href="{{ route('blog-read') }}">
                        <img class="object-cover w-full rounded-t-lg place-items-center" src="images\Flyer CSR 2024.png" alt="" />
                    </a>
                </div>

                <div
                    class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 xl:w-full lg:w-full sm:w-2/3 h-auto border border-gray-200 rounded-lg shadow-2xl ">
                    <a href="{{ route('blog-read') }}">
                        <img class="object-cover w-full rounded-t-lg place-items-center" src="images\Flyer CSR 2024.png" alt="" />
                    </a>
                </div>
                
            </div>
        </div>
        <button data-aos="fade-up" data-aos-duration="1500"
            class="bg-black px-8 py-4 text-white font-bold text-center rounded-full mb-8 hover:bg-orange-500">
            Learn More!
        </button>
    </div>


    {{-- SECTION 4 --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 mb-5 my-10">
        <h5 class="mb-2 text-3xl font-bold tracking-tight text-black">CSR Gallery</h5>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500" class="grid xl:grid-cols-3 sm:grid-cols-2 gap-4 mx-36 mb-16">
        {{-- CARD FOTO 1 --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-36 object-cover w-full rounded-t-lg" src="images\organizing-1.png" alt="" />
            <div class="px-5 py-3">
                <h6 class="text-lg font-bold tracking-tight text-black dark:text-black">Noteworthy technology acquisitions
                </h6>
                <p class="text-sm text-black dark:text-black">Kamis, 28 Maret 2024</p>

            </div>
        </div>

        {{-- CARD FOTO 1 --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-36 object-cover w-full rounded-t-lg" src="images\organizing-1.png" alt="" />
            <div class="px-5 py-3">
                <h6 class="text-lg font-bold tracking-tight text-black dark:text-black">Noteworthy technology acquisitions
                </h6>
                <p class="text-sm text-black dark:text-black">Kamis, 28 Maret 2024</p>

            </div>
        </div>

        {{-- CARD FOTO 1 --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-36 object-cover w-full rounded-t-lg" src="images\organizing-2.png" alt="" />
            <div class="px-5 py-3">
                <h6 class="text-lg font-bold tracking-tight text-black dark:text-black">Noteworthy technology acquisitions
                </h6>
                <p class="text-sm text-black dark:text-black">Kamis, 28 Maret 2024</p>

            </div>
        </div>
    </div>

@endsection
