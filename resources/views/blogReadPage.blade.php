@extends('layouts.app-layout')

@section('title', 'Read Blog')

@section('content')

    {{-- SECTION 1 - JUDUL & FOTO --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 mb-5 my-10">
        <h3 class="mb-2 text-4xl font-bold tracking-tight text-black">{{ $blog->title_blog }}</h3>
        <h5 class="mb-8 text-base font-normal tracking-tight text-orange-600">{{ $blog->updated_at->format('l, d F Y') }}</h5>
        <img loading="lazy" class="w-full h-[630px] object-cover" src="{{ asset('assets/img/' . $blog->pict_blog) }}" alt="{{ $blog->pict_blog }}">
    </div>

    {{-- SECTION 2 - BODY --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 mb-5 my-10">
        <p class="text-justify mb-16 font-medium">
            {{ $blog->desc_blog }}
        </p>
    </div>
@endsection
{{-- {{ {{ date({{ $blog->updated_at }},"l, d F Y") }} }} --}}