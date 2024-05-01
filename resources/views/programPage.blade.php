<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'Program')

@section('content')

    <div class="font-inter font-tight">
        {{-- Section 1 --}}
        <div class="items-center justify-center bg-white">
            <div class="w-full h-72 shadow-2xl overflow-hidden relative">
                <img class="absolute inset-0 h-full w-full object-cover" src="images\hero image.png">
                <div class="absolute inset-0 bg-white bg-opacity-50"></div>
                <div class="flex h-full items-center justify-center relative">
                    <h1 class="text-4xl text-black font-semibold">PROGRAM</h1>
                </div>
            </div>
        </div>

        {{-- Section 2 --}}
        <div class="bg-white max-w-full text-center p-20">
            <div class="flex flex-col sm:flex-row justify-center items-center">
                <div class="flex flex-col">
                    <a href="/trainingPage">
                    <div class="grid relative m-5">
                        <img src="/images/card1.png" alt="" class="block">
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 items-center">
                            <img src="/images/codicon_book.png" alt="book" class="inline-block align-middle mb-2 w-10 h-10 sm:w-12 sm:h-12">
                            <p class="text-white text-lg md:text-3xl sm:text-xl font-semibold z-10">
                                Training
                            </p>
                        </div>
                    </div>
                </a>

                <a href="/Organizing">
                    <div class="grid relative m-5">
                        <img src="/images/card1.png" alt="" class="block">
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 items-center">
                            <img src="/images/fluent-mdl2_workforce-management.png" alt="book"
                                class="inline-block align-middle mb-2 w-10 h-10 sm:w-12 sm:h-12">
                            <p class="text-white text-lg md:text-3xl sm:text-xl font-semibold z-10">
                                Organizing
                            </p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/consulting">
                <div class="flex flex-col">
                    <div class="grid relative m-5">
                        <img src="/images/card1.png" alt="" class="block">
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 items-center">
                            <img src="/images/healthicons_group-discussion-meeting-outline.png" alt="book" class="inline-block align-middle mb-2 w-10 h-10 sm:w-12 sm:h-12">
                            <p class="text-white text-lg md:text-3xl sm:text-xl font-semibold z-10">
                                Consulting
                            </p>
                        </div>
                    </div>
                </a>

                <a href="/AssesmentCenter">
                    <div class="grid relative m-5">
                        <img src="/images/card1.png" alt="" class="block">
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 items-center">
                            <img src="/images/fluent-mdl2_workforce-management.png" alt="book" class="inline-block align-middle mb-2 w-10 h-10 sm:w-12 sm:h-12">
                            <p class="text-white text-lg md:text-3xl sm:text-xl font-semibold z-10">
                                Asessment Center
                            </p>
                        </div>
                    </div>
                </a>

                </div>
            </div>


        </div>







    @endsection
