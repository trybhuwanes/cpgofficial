@extends('layouts.app-layout')

@section('title', 'Detail Event')

@section('content')

    {{-- SECTION 1 - JUDUL & FOTO --}}
    <div data-aos="lg:fade-up" data-aos-duration="1500" class="mx-16 lg:mx-36 mb-5 my-10">
        <h3 class="mb-2 text-6xl lg:text-4xl font-bold tracking-tight text-black">{{  $training->title_training }}</h3>
    </div>

    <div class="flex flex-wrap mx-16 lg:mx-36">
        <div data-aos="lg:fade-up" data-aos-duration="1500" class="lg:w-2/3 w-full ml-auto lg:pr-10 pr-0">
            <img class="w-full aspect-square object-cover" src="{{ asset($training->pict_training) }}" alt="{{ $training->pict_training }}">
        </div>
        <div
        data-aos="lg:fade-up" data-aos-duration="1500"  class="lg:w-1/3 w-full h-[333px] mt-5 lg:mt-0 p-5 bg-white rounded-[20px] shadow border border-neutral-500 flex-col justify-start items-start gap-5 inline-flex">
            <div class="justify-start items-start gap-2.5 inline-flex">
                <div
                    class="w-[90px] h-[90px] pl-3.5 pr-[15px] pt-[15px] pb-3.5 bg-white rounded-[20px] border border-black justify-center items-center flex">
                    <div class="w-[61px] h-[61px] relative flex-col justify-start items-start flex">
                        <img src="{{ asset('images/date.png')}}" alt="Date Icon">
                    </div>
                </div>
                <div class="py-[15px] flex-col justify-start items-start gap-[5px] inline-flex">
                    <div class="text-black text-3xl lg:text-xl font-medium leading-7">{{ $training->date_training->format('l, d F Y') }}</div>
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
                    <div class="text-black text-3xl lg:text-xl font-medium leading-7">{{ $training->location_training }}</div>
                </div>
            </div>
            <a href="https://{{ $training->link_pendaftaran }}" target="_blank">
                <button type="button" class="text-white bg-black hover:bg-orange-500 focus:outline-none focus:ring-4 font-medium rounded-full text-2xl lg:text-base px-8 py-4 text-center">Register</button>
            </a>
        </div>
    </div>


    {{-- SECTION 2 - BODY --}}
    <div data-aos="lg:fade-up" data-aos-duration="1500" class="mx-16 lg:mx-36 mb-5 my-10">
        <h5 class="mb-2 text-5xl lg:text-3xl font-bold tracking-tight text-black">Description</h5>
        <p class="text-2xl lg:text-base text-justify mb-16 font-medium">
            {!! nl2br($training->desc_training) !!}
        </p>
    </div>
@endsection
