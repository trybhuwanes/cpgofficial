<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'About Us')

@section('content')

<div class="font-inter font-tight">
     {{-- Section 1 --}}
     <div class="items-center justify-center bg-white">
        <div class="w-full h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="images\hero image.png">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-4xl text-black font-semibold">ABOUT US</h1>
            </div>
        </div>
    </div>
    {{-- Section 2 --}}
    <div class="bg-white max-w-full text-center mt-20 mb-20">
        <div class="flex flex-col justify-center items-center">
            <div class="text-4xl font-bold text-black max-w-[580px]">
                Who We Are?
            </div>

            <div class="flex justify-center items-center h-full mb-10 space-x-10">
                <img src="/images/iconCPG2.png" alt="Logo Client 1" class="mx-auto">
            </div>

            <p class="text-2xl text-black max-w-[911px]">
                PT CITRA PRESTASI GEMILANG (CPG) adalah perusahaan yang berfokus di bidang pelatihan, konsultasi dan
                mengorganisir kegiatan-kegiatan secara tersistem dan profesional. Fokus utama yang adalah melayani seluruh
                lapisan masyarakat dalam peningkatan kualitas sumber daya manusia. Perusahaan ini juga memberikan dorongan
                bagi masyarakat utamanya usia kerja untuk meningkatkan kualitas dan keterampilan sehingga dapat bersaing
                serta memenuhi kualifikasi yang dibutuhkan dalam dunia kerja.
            </p>

        </div>
    </div>

    {{-- Section 3 --}}
    <div class="bg-white max-w-full text-center"
        style="background-image: url('/images/tem-bg.jpg'); background-size: cover; background-position: center;">
        <div class="flex flex-col justify-center items-center">
            <div
                class="text-4xl xl:text-6xl text-white mb-10 mt-20 flex flex-wrap justify-center grid grid-cols-1 md:grid-cols-3">
                <div class="w-full max-w-[200px]">
                    <div class="text-4xl xl:text-6xl text-white text-left mb-2">
                        50+
                    </div>
                    <div class="text-sm text-white text-left w-full max-w-[150px]">
                        Client
                    </div>
                </div>
                <div class="w-full max-w-[200px]">
                    <div class="text-4xl xl:text-6xl text-white text-left mb-2">
                        50+
                    </div>
                    <div class="text-sm text-white text-left w-full max-w-[150px]">
                        Training and Certification
                    </div>
                </div>
                <div class="w-full max-w-[200px]">
                    <div class="text-4xl xl:text-6xl text-white text-left mb-2">
                        1000+
                    </div>
                    <div class="text-sm text-white text-left w-full max-w-[200px]">
                        Alumni peserta pelatihan dan sertifikasi
                    </div>
                </div>
            </div>
        </div>
        <div class="flex text-orange-100 justify-center">
            <div class="p-2 items-left justify-left flex">
                <div class="max-w-[235px] m-10">
                    <div class="font-bold mb-2 text-sm text-left xl:text-base text-white max-h-[200px]">
                        <img src="/images/users.png" alt="Logo Client 1" class="h-[20px]">
                        Trusted Program
                    </div>
                    <p class="text-sm text-left pb-2">
                        Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                    </p>
                </div>

                <div class="max-w-[235px] m-10">
                    <div class="font-bold mb-2 text-sm text-left xl:text-base text-white">
                        <img src="/images/users.png" alt="Logo Client 1" class="h-[20px]">
                        Trusted Program
                    </div>
                    <p class="text-sm text-left pb-2">
                        Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                    </p>
                </div>

                <div class="max-w-[235px] m-10">
                    <div class="font-bold mb-2 text-sm text-left xl:text-base text-white">
                        <img src="/images/users.png" alt="Logo Client 1" class="h-[20px]">
                        Trusted Program
                    </div>
                    <p class="text-sm text-left pb-2">
                        Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                    </p>
                </div>

                <div class="max-w-[235px] m-10">
                    <div class="font-bold mb-2 text-sm text-left xl:text-base text-white">
                        <img src="/images/users.png" alt="Logo Client 1" class="h-[20px]">
                        Trusted Program
                    </div>
                    <p class="text-sm text-left pb-2">
                        Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 4 --}}
    <div class="bg-white max-w-full">
        <div class="flex flex-col p-20 justify-center items-center text-center">
            <div class="text-4xl font-bold text-black w-full text-center">
                Our Motto, Visi, and Mission
            </div>

            <div class="flex justify-center flex-wrap gap-5 px-1 mt-20">
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="w-full h-full bg-orange-500 grid rounded-[20px] mb-5 p-[40px]">
                        <div class="place-items-center text-center">
                            <img src="/images/Group.png" alt="Logo Client 1" class="h-[70px] mx-auto mb-5">
                            <h1 class="text-2xl text-white mb-10">
                                Motto
                            </h1>
                            <p class="text-md w-full max-w-[250px]">
                                Gairah welas asih yang berorientasi pada pemberian manfaat yang nyata serta berorientasi
                                pada terwujudnya sebuah bentuk rasa cinta sesama umat manusia.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="w-full h-full bg-orange-500 grid rounded-[20px] mb-5 p-[40px]">
                        <div class="place-items-center text-center">
                            <img src="/images/streamline_eye-optic.png" alt="Logo Client 1" class="h-[70px] mx-auto mb-5">
                            <h1 class="text-2xl text-white mb-10">
                                Motto
                            </h1>
                            <p class="text-md w-full max-w-[250px]">
                                Menjadi lembaga layanan pelatihan, konsultasi, organisir kegiatan, serta pusat asesmen yang
                                professional dan berintregitas.
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="w-full h-full bg-orange-500 grid rounded-[20px] mb-5 p-[40px]">
                        <div class="place-items-center text-center">
                            <img src="/images/bi_chat-quote.png" alt="Logo Client 1" class="h-[70px] mx-auto mb-5">
                            <h1 class="text-2xl text-white mb-10">
                                Motto
                            </h1>
                            <p class="text-md w-full max-w-[250px]">
                                Menjadi sentra peningkatan kompetensi baik melalui layanan pelatihan, konsultasi dan
                                pencapaian kompetensi personal yang dapat meningkatkan kontribusi setiap individu pada
                                organisasi, masyarakat, bangsa, dan negara Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    {{-- Section 5 --}}
    <div class="grid justify-center items-center xl:flex xl:flex-row bg-orange-500 p-10 xl:p-20">
        <div class="xl:w-1/2">
            <div class="text-6xl text-white mb-20">
                President Director
            </div>

            <div class="bg-white mr-20 rounded-[20px] mb-10 w-1/2" style="background-image: url('/images/Image Box.png'); background-repeat: no-repeat;">
                <img src="/images/Bu Sri.png" class="h-full w-auto rounded-[20px]">
            </div>



        </div>

        {{-- <div class="xl:w-1/2">
            <div class="display grid text-orange-100">
                <div class="grid mb-10 max-w-[500px]">

                    <div class=" pr-2 mb-10">
                        <div class="font-bold mb-4 text-3sm text-black ">
                            What types of electrical services does electema Provide for homes?
                        </div>
                        <p class="text-sm pb-5  border-b border-white border-solid">
                            Tincidunt viverra dui faucibus leo adipiscing id luctus facilisis. Urna turpis felis aliquet
                            feugiat nunc. Sagittis diam morbi aenean.
                        </p>

                    </div>

                    <div class=" pr-2 mb-10">
                        <div class="font-bold mb-2 text-3sm text-black ">
                            What types of electrical services does electema Provide for homes?
                        </div>
                        <p class="text-sm pb-5  border-b border-white border-solid">
                            Tincidunt viverra dui faucibus leo adipiscing id luctus facilisis. Urna turpis felis aliquet
                            feugiat nunc. Sagittis diam morbi aenean.
                        </p>

                    </div>

                    <div class=" pr-2 mb-10">
                        <div class="font-bold mb-2 text-3sm text-black ">
                            What types of electrical services does electema Provide for homes?
                        </div>
                        <p class="text-sm pb-5  border-b border-white border-solid">
                            Tincidunt viverra dui faucibus leo adipiscing id luctus facilisis. Urna turpis felis aliquet
                            feugiat nunc. Sagittis diam morbi aenean.
                        </p>

                    </div>

                    <div class=" pr-2 mb-10">
                        <div class="font-bold mb-2 text-3sm text-black ">
                            What types of electrical services does electema Provide for homes?
                        </div>
                        <p class="text-sm pb-5  border-b border-white border-solid">
                            Tincidunt viverra dui faucibus leo adipiscing id luctus facilisis. Urna turpis felis aliquet
                            feugiat nunc. Sagittis diam morbi aenean.
                        </p>

                    </div>


                </div>
            </div>
        </div> --}}
    </div>
    {{-- Section 6 --}}
    <div class="bg-white max-w-full mt-20 mb-20">
        <div class="flex flex-col px-10">
            <div class="text-4xl font-bold text-left text-black max-w-[580px] mb-5">
                Struktur Organisasi
            </div>

            <div class="flex justify-center items-center mb-10 space-x-10">
                <img src="/images/struktur organisasi cpg 1.png" alt="Logo Client 1" class="mx-auto">
            </div>
        </div>
    </div>

    {{-- Section 7 --}}
    <div class="bg-orange-500 max-w-full">
        <div class="flex flex-col p-20">
            <div class="flex justify-between items-center mb-10">
                <div class="text-4xl font-bold text-black max-w-[580px] m-5">
                    Meet Our Team
                </div>
            </div>

            <div class="flex justify-center flex-wrap gap-x-1 sm:gap-x-2 md:gap-x-4 lg:gap-x-8 xl:gap-x-16 px-1">
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="bg-gray-400 grid rounded-[20px] text-center">
                        <img src="/images/dummyMember.png" alt="" class="rounded-tr-[20px] rounded-tl-[20px]">
                        <p class="text-xl">
                            Mellitya Silviandro Hening
                        </p>

                        <p class="text-lg">
                            Digital Marketing

                        </p>

                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="bg-gray-400 grid rounded-[20px] text-center">
                        <img src="/images/dummyMember.png" alt="" class="rounded-tr-[20px] rounded-tl-[20px]">
                        <p class="text-xl">
                            Mellitya Silviandro Hening
                        </p>

                        <p class="text-lg">
                            Digital Marketing

                        </p>

                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="bg-gray-400 grid rounded-[20px] text-center">
                        <img src="/images/dummyMember.png" alt="" class="rounded-tr-[20px] rounded-tl-[20px]">
                        <p class="text-xl">
                            Mellitya Silviandro Hening
                        </p>

                        <p class="text-lg">
                            Digital Marketing

                        </p>

                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="bg-gray-400 grid rounded-[20px] text-center">
                        <img src="/images/dummyMember.png" alt="" class="rounded-tr-[20px] rounded-tl-[20px]">
                        <p class="text-xl">
                            Mellitya Silviandro Hening
                        </p>

                        <p class="text-lg">
                            Digital Marketing

                        </p>

                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="bg-gray-400 grid rounded-[20px] text-center">
                        <img src="/images/dummyMember.png" alt="" class="rounded-tr-[20px] rounded-tl-[20px]">
                        <p class="text-xl">
                            Mellitya Silviandro Hening
                        </p>

                        <p class="text-lg">
                            Digital Marketing

                        </p>

                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="bg-gray-400 grid rounded-[20px] text-center">
                        <img src="/images/dummyMember.png" alt="" class="rounded-tr-[20px] rounded-tl-[20px]">
                        <p class="text-xl font-inter font-tight">
                            Mellitya Silviandro Hening
                        </p>

                        <p class="text-lg">
                            Digital Marketing

                        </p>

                    </div>
                </div>

        </div>
    </div>

</div>







@endsection
