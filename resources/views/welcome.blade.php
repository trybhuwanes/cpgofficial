<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'Welcome')

@section('content')
    {{-- Welcome Section 1 --}}
    <div class="bg-white max-w-full text-center">
        <div class="bg-cover bg-center h-screen max-h-[650]" style="background-image: url('/images/tem-bg.jpg')">
            <div class="flex flex-col justify-center items-center h-full">
                <div class="text-4xl font-bold text-black max-w-[580px]">
                    PASSION FOR COMPASSION
                </div>
                <p class="text-lg leading-8 text-black max-w-[580px]">
                    Tingkatkan kualitas dirimu bersama Citra Prestasi Gemilang dan jadilah pribadi baru untuk mengantar anda
                    menuju kesuksesan dalam karir serta kehidupan.
                </p>
                <br>
                <br>

                <button class="bg-black px-8 py-4 text-white font-bold text-center rounded-full">
                    Improve With Us!
                </button>
            </div>
        </div>
    </div>
    {{-- Section 2 --}}

    <div class="bg-white max-w-full text-center">
        <div class="flex flex-col justify-center items-center">
            <div class="text-4xl font-bold text-black max-w-[580px]">
                Our Clients
            </div>
            <br>
            <br>

            <div class="flex justify-center items-center h-full mb-10">
                <img src="/images/Logo Client 1.png" alt="Logo Client 1" class="mx-auto mx-10">
                <img src="/images/Logo Client 2.png" alt="Logo Client 2" class="mx-auto mx-10">
                <img src="/images/Logo Client 3.png" alt="Logo Client 3" class="mx-auto mx-10">
                <img src="/images/Logo Client 4.png" alt="Logo Client 4" class="mx-auto mx-10">
                <img src="/images/Logo Client 5.png" alt="Logo Client 5" class="mx-auto mx-10">
            </div>
        </div>
    </div>
    {{-- Section 3 --}}
    <div class="bg-white max-w-full text-center">
        <div class="flex flex-col justify-center items-center">
            <p class="text-lg leading-8 text-orange-400 max-w-[580px] m-5">
                Schedule
            </p>


            <div class="text-4xl font-bold text-black max-w-[580px] m-5">
                Upcoming Event
            </div>

            <p class="text-lg leading-8 text-black max-w-[580px] m-5">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>

            <div class="grid grid-cols-3 gap-10">
                <div>
                    <div class="w-48 h-64 bg-orange-400 flex justify-center items-center rounded-[20px]">1</div>
                    <h1 class="text-lg font-bold leading-10 text-black text-left">Lorem, ipsum.</h1>
                    <p class="text-left max-w-[180]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!
                    </p>
                </div>

                <div>
                    <div class="w-48 h-64 bg-orange-400 flex justify-center items-center rounded-[20px]">2</div>
                    <h1 class="text-lg font-bold leading-10 text-black text-left">Lorem, ipsum.</h1>
                    <p class="text-left max-w-[180]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!
                    </p>
                </div>

                <div>
                    <div class="w-48 h-64 bg-orange-400 flex justify-center items-center rounded-[20px]">3</div>
                    <h1 class="text-lg font-bold leading-10 text-black text-left">Lorem, ipsum.</h1>
                    <p class="text-left max-w-[180]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!
                    </p>
                </div>

            </div>
        </div>
        <button class="bg-black px-8 py-4 text-white font-bold text-center rounded-full m-10">
            Learn More!
        </button>
    </div>
    {{-- Section 4 --}}

    <div class="flex flex-cols-2 bg-orange-400 p-20">
        <div class="w-1/2">
            <div class="text-6xl text-white mb-20">
                Why Choose Us?
            </div>

            <div class="bg-orange-500 mr-20 w-[550px] h-[331px] rounded-[20px] p-10">
            </div>
        </div>




        <div class="w-1/2">
            <div class="text-6xl text-white mb-20 flex flex-cols-3">
                <div>
                    <div class="text-6xl text-white mb-5 mr-10 mr-10">
                        50+
                    </div>
                    <div name="subdiv" class="text-sm text-white w-full">
                        Client
                    </div>

                </div>
                <div>
                    <div class="text-1xl text-white mb-5 mr-10">
                        50+
                    </div>
                    <div name="subdiv" class="text-sm text-white w-full max-w-[100px]">
                        Training and Certification
                    </div>
                </div>
                <div>
                    <div class="text-6xl text-white mb-5 mr-10">
                        1000+
                    </div>
                    <div name="subdiv" class="text-sm text-white max-w-[150px]">
                        Alumni peserta pelatihan dan sertifikasi
                    </div>
                </div>

            </div>
            <div class="grid grid-cols-2 text-white">
                <div class="text-3sm font-semibold">
                    Lorem, ipsum.
                </div>

                <div class="text-3sm font-semibold">
                    Lorem, ipsum.
                </div>

                <div class="text-3sm font-semibold">
                    Lorem, ipsum dolor.
                </div>

                <div class="text-3sm font-semibold">
                    Lorem ipsum dolor sit.
                </div>

            </div>
        </div>
    </div>


@endsection
