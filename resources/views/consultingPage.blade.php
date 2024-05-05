@extends('layouts.app-layout')

@section('title', 'Consulting')

@section('content')

    {{-- SECTION 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="images\hero image.png">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-4xl text-black font-semibold">CONSULTING</h1>
            </div>
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 my-20">
        <p class="font-normal text-black text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porta urna nibh, non porta libero molestie eu.
            Sed ac erat sem.
            Nam id magna condimentum, aliquam nulla ut, posuere tellus. Praesent quam ex, varius eget dui sed, bibendum
            fermentum sem.
            In hac habitasse platea dictumst. Phasellus luctus nibh quis nulla dapibus viverra. Proin cursus condimentum
            ante, sed pulvinar sapien.
            Fusce semper ultricies quam at volutpat. Vivamus faucibus massa rutrum felis congue dignissim. Nulla ultricies
            nulla eu sem tincidunt pretium.
            Maecenas euismod laoreet urna, a lobortis dolor lacinia id. Etiam in varius erat, eu aliquam tellus. Aliquam
            feugiat cursus sodales.
            Aliquam vel diam vitae felis convallis finibus. Vestibulum mattis justo metus, blandit faucibus dui posuere
            elementum
        </p>
        <ol class="space-y-1 text-black list-decimal list-inside">
            <li>Management Event</li>
            <li>Industri-Based Curriculum</li>
            <li>Teaching Factory</li>
            <li>Internship</li>
            <li>Standard Operating Procedure</li>
            <li>Coaching</li>
        </ol>
    </div>

    {{-- SECTION 3 --}}
    <div class="bg-black max-w-full h-auto text-center py-20">
        <div data-aos="fade-up" data-aos-duration="1500" class="text-5xl text-white mb-12 font-bold">
            Profile Coach
        </div>

        <div class="flex xl:items-end sm:items-center sm:justify-center xl:flex-row sm:flex-col mx-36 mt-8">
            <div data-aos="fade-up" data-aos-duration="1500"
                class="xl:w-1/3 sm:w-1/2 h-fit p-1 bg-white rounded-xl shadow-xl items-end">
                <img class="rounded-xl" src="images\sertif-coach-1.jpg" alt="">
            </div>
            <div
                data-aos="fade-up" data-aos-duration="1500" class="xl:h-[400px] sm:h-[310px] sm:w-2/3 xl:w-auto xl:mt-0 sm:mt-5 bg-white rounded-xl shadow-2xl dark:bg-white dark:border-gray-100 xl:mx-5">
                <img class="block xl:h-72 sm:h-48 object-cover w-full rounded-t-lg" src="images\why-choose-us.jpg"
                    alt="" />
                <div class="px-5 py-3">
                    <h6 class="text-lg font-bold tracking-tight text-black dark:text-black text-center">Sri Sudarwati
                    </h6>
                    <p class="text-sm text-black dark:text-black text-center">Coach, CEO PT Citra Prestasi Gemilang. <br> Certified IALC. DCN/LCP/2018/000083. <br> Certified 3.0 Coaching Academy Ary Ginanjar.</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500"
                class="xl:w-1/3 sm:w-1/2 h-fit p-1 xl:mt-0 sm:mt-5 bg-white rounded-xl shadow-xl items-end">
                <img class="rounded-xl" src="images\sertif-coach-2.jpg" alt="">
            </div>
        </div>
    </div>

    {{-- SECTION 4 --}}
    <div class="bg-orange-500 max-w-full h-auto text-center py-20">
        <div data-aos="fade-up" data-aos-duration="1500" class="text-5xl text-black mb-12 font-bold">
            Consultant at CPG
        </div>

        <div data-aos="fade-up" data-aos-duration="1500" class="grid xl:grid-cols-4 sm:grid-cols-2 gap-4 mx-36">
            {{-- CARD FOTO 1 --}}
            <div
                class="xl:h-96 sm:h-[270px] bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block xl:h-72 sm:h-48 object-cover w-full rounded-t-lg" src="images\why-choose-us.jpg"
                    alt="" />
                <div class="px-5 py-3">
                    <h6 class="text-lg font-bold tracking-tight text-black dark:text-black text-center">Sri Sudarwati
                    </h6>
                    <p class="text-sm text-black dark:text-black text-center">Softskill & Self Development Consultant</p>

                </div>
            </div>

            {{-- CARD FOTO 2 --}}
            <div
                class="xl:h-96 sm:h-[270px] bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block xl:h-72 sm:h-48 object-cover w-full rounded-t-lg" src="images\why-choose-us.jpg"
                    alt="" />
                <div class="px-5 py-3">
                    <h6 class="text-lg font-bold tracking-tight text-black dark:text-black text-center">Sri Sudarwati
                    </h6>
                    <p class="text-sm text-black dark:text-black text-center">Softskill & Self Development Consultant</p>

                </div>
            </div>

            {{-- CARD FOTO 3 --}}
            <div
                class="xl:h-96 sm:h-[270px] bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block xl:h-72 sm:h-48 object-cover w-full rounded-t-lg" src="images\why-choose-us.jpg"
                    alt="" />
                <div class="px-5 py-3">
                    <h6 class="text-lg font-bold tracking-tight text-black dark:text-black text-center">Sri Sudarwati
                    </h6>
                    <p class="text-sm text-black dark:text-black text-center">Softskill & Self Development Consultant</p>

                </div>
            </div>

            {{-- CARD FOTO 4 --}}
            <div
                class="xl:h-96 sm:h-[270px] bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block xl:h-72 sm:h-48 object-cover w-full rounded-t-lg" src="images\why-choose-us.jpg"
                    alt="" />
                <div class="px-5 py-3">
                    <h6 class="text-lg font-bold tracking-tight text-black dark:text-black text-center">Sri Sudarwati
                    </h6>
                    <p class="text-sm text-black dark:text-black text-center">Softskill & Self Development Consultant</p>

                </div>
            </div>
        </div>
    </div>

    {{-- SECTION 5 --}}
    <div class="flex flex-wrap mx-36 py-20">
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-1/2 sm:w-full ml-autoh-12 xl:pr-10 sm:pr-0">
            <img class="w-full aspect-square object-cover rounded-xl shadow-xl" src="images\consulting.png" alt="Poster">
        </div>
        <div data-aos="fade-up" data-aos-duration="1500"
            class="xl:w-1/2 sm:w-full h-[333px] p-12 xl:mt-0 sm:mt-5 bg-white rounded-[20px] shadow-xl border border-neutral-500 flex-col justify-start items-start gap-5 inline-flex">
            <p class="text-base font-medium text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Etiam vestibulum libero quis nulla fermentum, sit amet eleifend purus aliquet.
                Phasellus porttitor sapien et eros posuere viverra. Donec at scelerisque purus.
                Nunc vel lacinia urna. Duis vitae sapien dui. Pellentesque et sapien a orci tincidunt molestie eget quis
                turpis.
                Donec vehicula eros a tincidunt maximus. Nunc scelerisque felis a neque molestie porttitor.</p>

            <a href="#">
                <button type="button"
                    class="text-white bg-black hover:bg-orange-500 focus:outline-none focus:ring-4 font-medium rounded-full text-base px-8 py-4 text-center">Register</button>
            </a>
        </div>
    </div>



@endsection