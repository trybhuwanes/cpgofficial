<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'Training')

@section('content')

    {{-- Section 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-96 lg:h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('/images/hero image.png') }}">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-6xl lg:text-4xl text-black font-semibold">TRAINING</h1>
            </div>
        </div>
    </div>

    {{-- Section 2 --}}
    <div class="bg-white max-w-full px-16 lg:px-36 pt-24 lg:pt-20 pb-10">
        <form action="{{ route('training.category') }}" method="GET">
            <select name="category" class="text-black bg-white rounded-[20px] px-4 py-2">
                <option value="full" class="text-2xl lg:text-base hover:bg-orange-500">Pilih Kategori: </option>
                @foreach($category as $category)
                    <option value="{{ $category->name_category }}" class="text-2xl lg:text-base hover:bg-orange-500">{{ $category->name_category }}</option>
                @endforeach
            </select>
            <button type="submit" class="text-2xl lg:text-base ml-5 bg-black px-10 py-2 max-h-12 text-white font-bold text-center rounded-full">Apply</button>
        </form>
    </div>


    {{-- SECTION 3 --}}
    <div class="grid lg:grid-cols-3 grid-cols-2 gap-10 mx-16 lg:mx-36 mb-20">
        {{-- CARD 1 --}}
        @foreach($training as $item)
        <div data-aos="lg:fade-up" data-aos-duration="1500"
            class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 max-w-1/3 lg:h-[600px] h-[740px] bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100 hover:bg-orange-500">
            <a href="{{ route('training.detail', $item->slug_training) }}">
                <img class="w-full rounded-t-lg" src="{{ asset('assets/img/' . $item->pict_training) }}" alt="" />
            </a>
            <div class="p-5">
                <a href="{{ route('training.detail', $item->slug_training) }}">
                    <h6 class="mb-2 text-3xl lg:text-xl font-bold tracking-tight text-black dark:text-black">{{ $item->title_training }}</h6>
                </a>
                <p class="mb-3 text-sm font-normal text-black dark:text-black">{{ $item->shortdesc_training }}</p>
                <a href="{{ route('training.detail', $item->slug_training) }}"
                    class="text-2xl lg:text-sm inline-flex items-center px-6 lg:px-3 py-3 lg:py-2 font-medium text-center text-white bg-black rounded-lg hover:bg-orange-700 focus:outline-none">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        @endforeach

    </div>

@endsection
