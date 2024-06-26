@extends('layouts.app-layout')

@section('title', 'Blog')

@section('content')

    {{-- SECTION 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-96 lg:h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('/images/hero image.png') }}">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-6xl lg:text-4xl text-black font-semibold">BLOG</h1>
            </div>
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div data-aos="lg:fade-up" data-aos-duration="1500" class="grid lg:grid-cols-3 grid-cols-1 gap-7 lg:gap-4 mx-16 lg:mx-36 py-28 lg:py-16">
        {{-- CARD BLOG --}}
        @foreach($blog as $blog)
        <div
            class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 max-w-1/3 h-auto bg-white border border-gray-200 rounded-lg shadow-2xl hover:bg-orange-500">
            <a href="{{ route('blog.read', $blog->slug_blog) }}">
                <img class="block h-44 lg:h-36 object-cover w-full rounded-t-lg" src="{{ asset($blog->pict_blog) }}" alt="{{ $blog->pict_blog }}" />
            </a>
            <div class="p-5">
                <a href="{{ route('blog.read', $blog->slug_blog) }}">
                    <h6 class="mb-2 text-3xl lg:text-xl font-bold tracking-tight text-black">{{ $blog->title_blog }}</h6>
                </a>
                <p class="mb-3 text-2xl lg:text-sm font-normal text-black">{{ Str::substr($blog->desc_blog, 0, 40) }} ... </p>
                <a href="{{ route('blog.read', $blog->slug_blog) }}"
                    class="inline-flex items-center px-6 lg:px-3 py-3 lg:py-2 text-2xl lg:text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-orange-700 focus:outline-none">
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
