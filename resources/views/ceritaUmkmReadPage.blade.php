@extends('layouts.app-layout')

@section('title', 'Read Cerita UMKM')

@section('content')

    {{-- SECTION 1 - JUDUL & FOTO --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-16 lg:mx-36 mb-5 my-10">
        <h3 class="mb-2 text-6xl lg:text-4xl font-bold tracking-tight text-black">{{ $story->title_story }}</h3>
        <h5 class="mb-8 text-2xl lg:text-sm font-normal tracking-tight text-orange-600">{{ $story->updated_at->format('l, d F Y') }}</h5>
        <img class="w-full h-auto object-cover" src="{{ asset($story->pict_story) }}" alt="{{  $story->pict_story  }}">
    </div>

    {{-- SECTION 2 - BODY --}}
    <div data-aos="lg:fade-up" data-aos-duration="1500" class="mx-16 lg:mx-36 mb-5 my-10">
        <p class="text-2xl lg:text-base text-justify mb-16 font-medium">
            {!! nl2br($story->body_story) !!}
        </p>
    </div>
@endsection
