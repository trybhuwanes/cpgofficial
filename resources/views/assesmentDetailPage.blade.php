@extends('layouts.app-layout')

@section('title', 'Detail Assesment Center')

@section('content')

    {{-- SECTION 1 --}}
    <div class="flex flex-wrap items-center justify-center bg-orange-500 px-36 pt-14 pb-20">
        <div class="xl:w-7/12 sm:w-full">
            <div data-aos="fade-up" data-aos-duration="1500" class="max-w-full pr-10">
                <div class="w-full text-4xl text-white mb-5 font-bold">
                    Sertifikasi Kompetensi BNSP Service Excellence
                </div>

                <p class="text-sm leading-7 text-white w-full">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries
                </p>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-5/12 h-48 justify-center items-center sm:w-full sm:mt-5">
            <img class="h-56 object-cover w-full rounded-xl" src="images\service-excellence.jpg">
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 my-20">
        <div class="block w-full p-10 bg-white border border-gray-300 rounded-xl shadow-2xl">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-600">Pentingnya Service Excellence</h5>
            <hr class="h-px my-3 border-0 bg-gray-800">
            <p class="text-base font-medium text-black mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Etiam vestibulum libero quis nulla fermentum, sit amet eleifend purus aliquet.
                Phasellus porttitor sapien et eros posuere viverra. Donec at scelerisque purus.
                Nunc vel lacinia urna. Duis vitae sapien dui. Pellentesque et sapien a orci tincidunt molestie eget quis
                turpis.
                Donec vehicula eros a tincidunt maximus. Nunc scelerisque felis a neque molestie porttitor.</p>

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-600">Pentingnya Sertifikasi BNSP</h5>
            <hr class="h-px my-3 border-0 bg-gray-800">
            <ul class="text-base font-medium text-black mb-5 list-disc pl-4">
                <li>Meningkatkan rasa percaya diri terhadap kemampuan yang dimiliki</li>
                <li>Lebih mudah bagi perusahaan untuk menyaring calon karyawan yang kompeten</li>
                <li>Membantu meningkatkan akses dalam mengembangkan diri</li>
                <li>Mampu mengetahui tingkat kemampuan</li>
                <li>Produktivitas kerja jadi meningkat</li>
            </ul>

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-600">Unit Kompetensi</h5>
            <hr class="h-px my-3 border-0 bg-gray-800">
            <ul class="text-base font-medium text-black mb-5 list-disc pl-4">
                <li>S.941000.022.02 Melaksanakan Public Speaking</li>
                <li>S.941000.018.02 Melaksanakan Master Of Ceremony</li>
                <li>S.941000.023.02 Membuat Pidato</li>
                <li>S. 941000.026.02 Melaksanakan Fungsi Juru Bicara / Spokeperson</li>
                <li>S.941000.015.02 Melaksanakan Fungsi Moderator</li>
            </ul>

        </div>

    </div>


    {{-- SECTION 3 --}}
    <div class="grid w-full justify-center items-center xl:flex xl:flex-row bg-black xl:px-36 xl:p-24 sm:py-24">
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-1/2">
            <div class="text-5xl text-white mb-10 font-bold">
                Persyaratan
            </div>

            <div class="bg-white mr-20 h-64 w-full xl:w-[550px] rounded-[20px] p-10 mb-10">
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-1/2">
            <div class="display grid text-white">
                <div class="grid mb-10 max-w-[600px]">
                    <div class=" pr-2 mb-3">
                        <div class="font-normal mb-4 text-xl text-white ">
                            KTP
                        </div>
                        <hr class="h-px my-3 border-0 bg-white">
                    </div>

                    <div class=" pr-2 mb-3">
                        <div class="font-normal mb-4 text-xl text-white ">
                            KTP
                        </div>
                        <hr class="h-px my-3 border-0 bg-white">
                    </div>

                    <div class=" pr-2 mb-3">
                        <div class="font-normal mb-4 text-xl text-white ">
                            KTP
                        </div>
                        <hr class="h-px my-3 border-0 bg-white">
                    </div>

                    <div class=" pr-2 mb-3">
                        <div class="font-normal mb-4 text-xl text-white ">
                            KTP
                        </div>
                        <hr class="h-px my-3 border-0 bg-white">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION 4 --}}
    <div class="bg-white max-w-full text-center mt-20 mb-20">
        <div class="flex flex-col justify-center items-center">
            <div data-aos="fade-up" data-aos-duration="1500" class="text-4xl font-bold text-black max-w-full text-center mb-7">
                Upcoming Certification
            </div>

            <a data-aos="fade-up" data-aos-duration="1500" href="{{ route('training.detail') }}"
                class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105">
                <img class="flex items-center justify-center object-cover rounded-t-lg w-80" src="images\Flyer CSR 2024.png"
                    alt="" />
            </a>
        </div>
    </div>

    {{-- SECTION 5 --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 my-20">

        <div class="flex flex-wrap items-center justify-center bg-black p-10 border border-gray-300 rounded-xl shadow-2xl"">
            <div class="xl:w-3/4 sm:w-full">
                <div data-aos="fade-up" data-aos-duration="1500" class="max-w-full pr-10">
                    <div class="w-full text-4xl text-orange-500 mb-5 font-bold">
                        Investasi Sekarang!
                    </div>

                    <p class="text-sm leading-7 text-white w-full mb-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam diam magna, tincidunt nec blandit
                        vel, mollis
                        eget felis. Aenean eleifend lectus eu enim feugiat vestibulum. In lectus sapien, ultrices in enim
                        vitae,
                        vestibulum tristique leo.
                        <br>
                        <br>Hubungi contact di bawah ini:
                        <br>0811 360 215
                    </p>

                    <button
                        class="text-white bg-orange-600 font-medium rounded-full text-sm px-10 py-3 text-center hover:bg-orange-700">Whatsapp</button>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500"
                class="xl:w-1/4 h-56 justify-center items-center sm:w-full sm:mt-5">
                <img class="h-56 object-cover w-full rounded-xl" src="images\investasi-sekarang.png">
            </div>
        </div>

        
    </div>

@endsection
