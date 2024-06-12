@extends('layouts.admin-app')

@section('title', 'Admin | Read Training Program')

@section('content')

    {{-- @include('components.component') --}}
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="{{ route('admin.dashboard') }}"
                                class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="{{ route('admin.training') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Training
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                                    aria-current="page">Read</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Read Training Event</h1>
            </div>
        </div>
    </div>

    {{-- TITLE, PICT, DATE TRAINING --}}
    

    <div data-aos="fade-up" data-aos-duration="1500" class="mx-20 mb-5 my-10">
        <a href="{{ route('admin.training') }}">
            <svg class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 w-9 h-9 text-white mb-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/> Back
            </svg>
        </a>
        <h3 class="mb-2 text-4xl font-bold tracking-tight text-white">{{  $training->title_training }}</h3>
    </div>

    <div class="flex flex-wrap mx-20">
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-2/3 sm:w-full ml-autoh-12 xl:pr-10 sm:pr-0">
            <img class="w-full aspect-square object-cover" src="{{ asset($training->pict_training) }}" alt="{{ $training->pict_training }}">
        </div>
        <div
        data-aos="fade-up" data-aos-duration="1500"  class="xl:w-1/3 sm:w-full h-[333px] p-5 bg-white rounded-[20px] shadow border border-neutral-500 flex-col justify-start items-start gap-5 inline-flex">
            <div class="justify-start items-start gap-2.5 inline-flex">
                <div
                    class="w-[90px] h-[90px] pl-3.5 pr-[15px] pt-[15px] pb-3.5 bg-white rounded-[20px] border border-black justify-center items-center flex">
                    <div class="w-[61px] h-[61px] relative flex-col justify-start items-start flex">
                        <img src="{{ asset('images/date.png')}}" alt="Date Icon">
                    </div>
                </div>
                <div class="py-[15px] flex-col justify-start items-start gap-[5px] inline-flex">
                    <div class="text-black text-xl font-medium leading-7">{{ $training->date_training->format('l, d F Y') }}</div>
                    {{-- <div class="text-black text-xl font-medium leading-7">15.30 - 17.00 WIB</div> --}}
                </div>
            </div>
            <div class="justify-start items-start gap-2.5 inline-flex">
                <div
                    class="w-[90px] h-[90px] pl-3.5 pr-[15px] pt-[15px] pb-3.5 bg-white rounded-[20px] border border-black justify-center items-center flex">
                    <div class="w-[61px] h-[61px] relative flex-col justify-start items-start flex">
                        <img src="{{ asset('images/location.png')}}" alt="Location Icon">
                    </div>
                </div>
                <div class="py-[15px] flex-col justify-start items-start gap-[5px] inline-flex">
                    <div class="text-black text-xl font-medium leading-7">{{ $training->location_training }}</div>
                </div>
            </div>
            <a href="https://{{ $training->link_pendaftaran }}" target="_blank">
                <button type="button" class="text-white bg-black hover:bg-orange-500 focus:outline-none focus:ring-4 font-medium rounded-full text-base px-8 py-4 text-center">Register</button>
            </a>
        </div>
    </div>


    {{-- SECTION 2 - BODY --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-20 mb-5 my-10 pb-20">
        <h5 class="mb-2 text-3xl font-bold tracking-tight text-white">Description</h5>
        <p class="text-justify mb-16 text-white font-medium">
            {!! nl2br($training->desc_training) !!}
        </p>
    </div>

@endsection
