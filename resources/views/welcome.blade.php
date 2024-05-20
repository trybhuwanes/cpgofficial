<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'Home')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    {{-- Section 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-fit sm:h-[600px] overflow-hidden relative">
            {{-- <img class="absolute inset-0 h-full w-full object-cover" src="images\hero-image.png"> --}}
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('/images/hero-image.gif') }}">
            {{-- <div class="absolute inset-0 bg-white bg-opacity-50"></div> --}}
            <div class="flex h-full items-center justify-center relative">
                {{-- <h1 class="text-4xl text-black font-semibold">BLOG</h1> --}}
                <div class="flex flex-col justify-center items-center h-full">
                    <div class="xl:text-5xl sm:text-6xl font-semibold text-black max-w-full pb-6 leading tight">
                        PASSION FOR <br> COMPASSION
                    </div>
                    <p class="text-lg leading-8 text-black xl:max-w-[520px] md:max-w-[460px] sm:w-full text-center pb-10">
                        Tingkatkan kualitas dirimu bersama Citra Prestasi Gemilang dan jalankan kehidupanmu dengan gairah welas asih,
                        untuk saling menyayangi sesama manusia dan makhluk hidup.
                    </p>
                    <button class="bg-black px-8 py-4 text-white font-bold text-center rounded-full hover:bg-orange-500">
                        Improve With Us!
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 2 --}}
    <div class="bg-white max-w-full h-autotext-center pt-16">
        <div class="flex flex-col justify-center items-center">
            <div data-aos="fade-up" data-aos-duration="1500" class="text-4xl font-bold text-black max-w-[580px] mb-10">
                Our Clients
            </div>

            <div data-aos="fade-up" data-aos-duration="1500"
                class="flex justify-center items-center h-full mb-10 space-x-10">
                <img class="h-20 mr-5" src="{{ asset('images\logo\kementerian\kemnaker.png') }}" alt="Kemnaker" class="mx-auto">
                <img class="h-20 mr-5" src="{{ asset('images\logo\kementerian\kemdikbud.png') }}" alt="Kemendikbud" class="mx-auto">
                <img class="h-20 mr-5" src="{{ asset('images\logo\kementerian\kemenparekraf.png') }}" alt="kemenparekraf" class="mx-auto">
                <img class="h-20 mr-5" src="{{ asset('images\logo\kementerian\bappenas.png') }}" alt="bappenas" class="mx-auto">
                <img class="h-20 mr-5" src="{{ asset('images\logo\kementerian\kominfo.png') }}" alt="kominfo" class="mx-auto">
            </div>

            <a href="{{ route('collaboration') }}">
                <button data-aos="fade-up" data-aos-duration="1500" type="button" class="text-white bg-black hover:bg-orange-500 focus:outline-none focus:ring-4 font-medium rounded-full text-lg px-5 py-2.5 text-center me-2 mb-2 ">See More</button>
            </a>

        </div>
    </div>


    {{-- Section 3 UPCOMING EVENT --}}
    <div class="bg-white max-w-full h-auto text-center">
        <div data-aos="fade-up" data-aos-duration="1500" class="flex flex-col justify-center">
            <p class="text-lg leading-8 text-orange-400 max-w-full mt-20 font-bold">
                SCHEDULE
            </p>
            <div class="text-4xl font-bold text-black max-w-full m-5">
                Upcoming Event
            </div>

            <p class="text-lg leading-8 text-black max-w-full mb-10">
                Jangan lewatkan agenda kami!
            </p>

            <div data-aos="fade-up" data-aos-duration="1500" class="grid xl:grid-cols-3 lg:grid-cols-2 sm:grid-cols-1 gap-10 mx-52 sm:mx-36 mb-12 sm:content-center place-items-center">
                {{-- CARD BLOG --}}
                <div
                    class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 xl:w-full lg:w-full sm:w-2/3 h-auto border border-gray-200 rounded-lg shadow-2xl ">
                    <a href="">
                        <img class="object-cover w-full rounded-t-lg place-items-center" src="images\Flyer CSR 2024.png" alt="" />
                    </a>
                </div>

                <div
                    class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 xl:w-full lg:w-full sm:w-2/3 h-auto border border-gray-200 rounded-lg shadow-2xl ">
                    <a href="">
                        <img class="object-cover w-full rounded-t-lg place-items-center" src="images\Flyer CSR 2024.png" alt="" />
                    </a>
                </div>

                <div
                    class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 xl:w-full lg:w-full sm:w-2/3 h-auto border border-gray-200 rounded-lg shadow-2xl ">
                    <a href="">
                        <img class="object-cover w-full rounded-t-lg place-items-center" src="images\Flyer CSR 2024.png" alt="" />
                    </a>
                </div>

            </div>
        </div>
        <a href="{{ route('training') }}">
            <button data-aos="fade-up" data-aos-duration="1500"
            class="bg-black px-8 py-4 text-white font-bold text-center rounded-full mb-20 hover:bg-orange-500">
            Learn More!
        </button>
        </a>
    </div>

    {{-- Section 4 WHY CHOOSE US --}}
    <div class="grid w-full h-auto xl:flex xl:flex-row bg-orange-500 xl:px-36 xl:p-24 sm:py-24">
            <div data-aos="fade-up" data-aos-duration="1500" class="w-full xl:w-1/2 mb-10 xl:mb-0 xl:mr-10 items-start">
                <div class="text-5xl text-white mb-10 font-bold">
                    Why Choose Us?
                </div>

                <div class="">
                    <img class="object-cover w-full h-[380px] xl:w-[550px] rounded-[20px]" src="{{ asset('images\why-choose-us.jpg') }}" alt="">
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" class="w-full xl:w-1/2 justify-center items-center ">
                <div class="text-4xl xl:text-6xl text-white mb-10 flex flex-wrap">
                    <div class="mr-10">
                        <span class="mb-3 flex tabular-nums text-4xl xl:text-5xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:100]'">
                            <span class="supports-[counter-set]:sr-only"></span>+
                        </span>
                        <div class="text-base text-white w-full max-w-[150px]">
                            Client
                        </div>
                    </div>
                    <div class="">
                        <span class="mb-3 flex tabular-nums text-4xl xl:text-5xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:100]'">
                            <span class="supports-[counter-set]:sr-only"></span>+
                        </span>
                        <div class="text-base text-white w-full max-w-[150px]">
                            Training and Certification
                        </div>
                    </div>
                    <div class="">
                        <span class="mb-3 flex tabular-nums text-4xl xl:text-5xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:3600]'">
                            <span class="supports-[counter-set]:sr-only"></span>+
                        </span>
                        <div class="text-base text-white w-full max-w-[200px]">
                            Alumni peserta pelatihan dan sertifikasi
                        </div>
                    </div>
                </div>

                <div class="grid text-orange-100">
                    <div class="flex mb-10 border-b border-white border-solid max-w-[500px]">
                        <div class="max-w-[235px] pr-2 mb-3 mr-5">
                            <div class="font-bold mb-2 text-base xl:text-lg text-white">
                                Big Expansion
                            </div>
                            <p class="text-sm pb-2">
                                Lebih dari satu dekade pengalaman, kami memiliki keterampilan mendalam untuk memberi solusi yang efektif dan inovatif
                            </p>
                        </div>
                        <div class="max-w-[235px] mb-3">
                            <div class="font-bold mb-2 text-base xl:text-lg text-white">
                                Commitmen to Quality
                            </div>
                            <p class="text-sm pb-2">
                                Kami menyediakan pendampingan yang berfokus pada pertumbuhan dan pengembangan yang berkelanjutan
                            </p>
                        </div>
                    </div>

                    <div class="flex border-b mb-5 border-white border-solid max-w-[500px]">
                        <div class="max-w-[235px] mb-3 mr-5">
                            <div class="font-bold mb-2 text-base xl:text-lg text-white">
                                Professional Team
                            </div>
                            <p class="text-sm pb-2">
                                Tim kami terdiri dari ahli yang berpengalaman dan berkomitmen memberikan layanan berkualitas kepada klien kami 
                            </p>
                        </div>
                        <div class="max-w-[235px]">
                            <div class="font-bold mb-2 text-base xl:text-lg text-white">
                                After Service Experience
                            </div>
                            <p class="text-sm pb-2">
                                Layanan free coaching setelah kegiatan training dan sertifikasi
                            </p>
                        </div>
                    </div>

                    <a href="{{ route('about') }}">
                        <button class="bg-black hover:bg-orange-700 px-8 py-4 text-white font-bold text-center rounded-full mt-5 max-w-[200px]">
                            Learn More!
                        </button>
                    </a>
                </div>
            </div>

    </div>

    {{-- Section 5 INTERNSHIP --}}
    <div class="bg-white max-w-full grid xl:flex px-20 pt-20">
        <div data-aos="fade-up" data-aos-duration="1500" class="max-w-full xl:max-w-[480px] m-10 sm:mb-0">
            <div class="max-w-[580px] m-5 text-5xl text-black mb-10 font-bold">
                Our Program
            </div>

            <p class="text-lg leading-8 text-black max-w-[580px] mx-5">
                Dapatkan keunggulan kompetitif melalui layanan kami yang komprehensif dalam Training, Consulting, Organizing, dan Assesment Center
            </p>
        </div>
        <div class="flex xl:grid">
            <div data-aos="fade-up" data-aos-duration="1500" class="grid grid-cols-2 gap-4 mb-16 pt-16 sm:mx-16">
                <div class="bg-orange-500 max-w-[400px] max-h-60 p-10 rounded-[20px]">
                    <h1 class="text-2xl font-bold text-white text-left mb-3">
                        Training
                    </h1>
                    <p class="text-sm text-white">
                        Training untuk kalangan dunia pendidikan, perusahaan, instansi atau masyarakat luas.
                    </p>
                    <a href="{{ route('training') }}">
                        <div class="text-white mt-5 font-bold text-base hover:text-blue-800">
                            Learn More
                        </div>
                    </a>
                </div>

                <div class="bg-orange-500 max-w-[400px] max-h-60 p-10 rounded-[20px]">
                    <h1 class="text-2xl font-bold text-white text-left mb-3">
                        Consulting
                    </h1>
                    <p class="text-sm text-white">
                        Pemecahan masalah yang dihadapi dengan bantuan konsultan berpengalaman.
                    </p>
                    <a href="{{ route('consulting') }}">
                        <div class="text-white mt-5 font-bold text-base hover:text-blue-800">
                            Learn More
                        </div>
                    </a>
                </div>

                <div class="bg-orange-500 max-w-[400px] max-h-60 p-10 rounded-[20px]">
                    <h1 class="text-2xl font-bold text-white text-left mb-3">
                        Organizing
                    </h1>
                    <p class="text-sm text-white">
                        Organizing, kita akan menjelajahi seni menyusun dan mengelola segala hal, dari ide hingga eksekusi, untuk menciptakan dampak yang berarti.                   </p>
                    <a href="{{ route('organizing') }}">
                        <div class="text-white mt-5 font-bold text-base hover:text-blue-800">
                            Learn More
                        </div>
                    </a>
                </div>

                <div class="bg-orange-500 max-w-[400px] max-h-60 p-10 rounded-[20px]">
                    <h1 class="text-2xl font-bold text-white text-left mb-3">
                        Assesment Center
                    </h1>
                    <p class="text-sm text-white">
                        Metode berbasis kompetensi yang sesuai dengan standar internasional, membawa peserta pada perjalanan pencapaian terbaik mereka.                   </p>
                    <a href="{{ route('assesment-center') }}">
                        <div class="text-white mt-5 font-bold text-base hover:text-blue-800">
                            Learn More
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 6 INTERNSHIP  --}}
    <div class="bg-white mb-28 px-3">
        <div data-aos="fade-up" data-aos-duration="1500" class="flex justify-between items-center mx-32">
            <div class="max-w-[580px] my-5 text-5xl text-black mb-10 font-bold">
                Internship
            </div>
            <a href="{{ route('internship') }}">
                <button class="bg-black px-6 py-2 max-h-12 text-white font-bold text-center rounded-full">
                    See All
                </button>
            </a>
        </div>

        <div data-aos="fade-up" data-aos-duration="1500" class="grid xl:grid-cols-2 lg:grid-cols-2 sm:grid-cols-1 gap-10 mx-52 sm:mx-36 mb-12 sm:content-center place-items-center">
            <div
                class="xl:w-full lg:w-full sm:w-2/3 h-72 border border-gray-200 rounded-lg shadow-2xl ">
                <img class="object-cover w-full h-full rounded-lg place-items-center" src="{{ asset('/images/internbg.png') }}" alt="MSIB Batch 6 (Februari - Juni 2024)" />
                <p id="teks" class="font-medium text-xl mt-5">
                    MSIB Batch 6 (Februari - Juni 2024)
                </p>
            </div>

            <div
                class="xl:w-full lg:w-full sm:w-2/3 h-72 border border-gray-200 rounded-lg shadow-2xl ">
                <img class="object-cover w-full h-full rounded-lg place-items-center" src="{{ asset('/images/magang-smk.jpg') }}" alt="Magang SMK Blabla" />
                <p id="teks" class="font-medium text-xl mt-5">
                    Magang SMK
                </p>
            </div>
        </div>
    </div>

    {{-- Section 7 FAQ --}}
    <div class="grid w-full xl:flex xl:flex-row bg-orange-500 xl:px-36 xl:p-24 sm:py-24">
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-1/2">
            <div class="text-5xl text-white first-line:mb-10 font-bold mb-5 items-start">
                Frequently Asked Questions
            </div>
            <div class=" mr-20 ">
                <img class="object-cover w-full xl:w-[550px] h-[331px] rounded-[20px] justify-center items-center " src="{{ asset('images\faq.jpg') }}" alt="">
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-1/2 justify-center items-center place-items-center">
            <div class="display grid text-orange-100">
                <div class="grid max-w-[600px]">
                    <div class=" pr-2 mb-8">
                        <div class="font-bold mb-4 text-xl text-white ">
                            Bagaimana cara mendaftar pelatihan atau event lainnya di CPG?
                        </div>
                        <p class="text-sm pb-5  border-b border-white border-solid">
                            Cara mendaftarnya bisa langsung mengisi link pendaftaran yang tersedia, 
                            dan apabila ada pertanyaan lain bisa menghubungi contact person atau admin.
                        </p>
                    </div>

                    <div class=" pr-2 mb-8">
                        <div class="font-bold mb-2 text-xl text-white">
                            Apakah sertifikat dari CPG cukup kuat untuk melamar pekerjaan?
                        </div>
                        <p class="text-sm pb-5  border-b border-white border-solid">
                            Sertifikat CPG bisa digunakan untuk melamar pekerjaan sebagai pendukung portofolio peserta. 
                            Jika pelatihan terdapat program sertifikasi keahlian, 
                            sertifikasi dapat membantu peserta dalam melamar pekerjaan.
                        </p>
                    </div>

                    <div class=" pr-2 mb-8">
                        <div class="font-bold mb-2 text-xl text-white">
                            Apakah pelatihan CPG ini hanya bisa diikuti secara online saja?
                        </div>
                        <p class="text-sm pb-5 border-b border-white border-solid">
                            Pelatihan ini dapat diikuti secara online dan offline sesuai ketentuan pada tema pelatihan, 
                            untuk info event terkini dapat cek di instagram dan website.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 8 VIDEO --}}
    <div class="bg-white max-w-full">
        <div class="flex flex-col py-10">
            <div data-aos="fade-up" data-aos-duration="1500" class="flex justify-between items-center my-10 mx-36">
                <div class="max-w-[580px] m-5 text-5xl text-black mb-10 font-bold">
                    Video
                </div>
                <a href="http://www.youtube.com/@citraprestasigemilang655" target="_blank">
                    <button class="bg-black px-6 py-2 max-h-12 text-white font-bold text-center rounded-full">
                        See More!
                    </button>
                </a>
            </div>

            <div data-aos="fade-up" data-aos-duration="1500" class="flex justify-center flex-wrap sm:gap-5 md:gap-5 lg:gap-20 xl:gap-30 pb-20 px-20">
                {{-- <iframe class="w-full aspect-[4/3]" src="https://www.youtube.com/embed/kvUAwvpWHrA?si=zzuAfovcryTSfUMc"></iframe> --}}
                <div class=" sm:w-auto md:w-1/3 xl:w-1/4">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/kvUAwvpWHrA?si=zzuAfovcryTSfUMc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h1 class="mt-5 text-lg font-bold leading-6 text-black text-left">CORPORATE SOCIAL RESPONSIBILITY</h1>
                    {{-- <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!</p> --}}
                </div>
                <div class=" sm:w-auto md:w-1/3 xl:w-1/4">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/jMxJP1XJc0I?si=uNKMVA5WqaUnF9CW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h1 class="mt-5 text-lg font-bold leading-6 text-black text-left">PUBLIC SPEAKING #2</h1>
                    {{-- <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!</p> --}}
                </div>
                <div class=" sm:w-auto md:w-1/3 xl:w-1/4">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/PE7s-6iBuQ0?si=RSL2PYTHZJyYqZJa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h1 class="mt-5 text-lg font-bold leading-6 text-black text-left">CSR SEBAGAI TANGGUNG JAWAB MORAL (CSR VOL.2)</h1>
                    {{-- <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!</p> --}}
                </div>
            </div>

        </div>
    </div>

    {{-- Section 9 WHAT THEY SAY --}}
    <div class="bg-orange-500 max-w-full">
        <div class="flex flex-col px-36 py-24">
            <div data-aos="fade-up" data-aos-duration="1500" class="flex justify-between items-center mb-10">
                <div class="text-5xl font-bold text-white max-w-[580px] m-5">
                    What They Say About Our Program
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1500" class="flex justify-center flex-wrap gap-x-5 sm:gap-x-10 md:gap-x-20 lg:gap-x-30 xl:gap-x-10 px-1">
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-5">
                    <div class="w-full h-[300] bg-white grid rounded-[20px] mb-5 p-7">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-[70px] h-[70px] object-cover rounded-lg" src="images\why-choose-us.jpg" alt="">
                            </div>
                        </div>

                        <div>
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Try Bhuwaneswari
                            </h1>
                            <p class="">
                                Trainernya berpengalaman, materinya berkualitas, penyampaian materi sangat enak.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-5">
                    <div class="w-full h-[300] bg-white grid rounded-[20px] mb-5 p-7">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-[70px] h-[70px] object-cover rounded-lg" src="images\why-choose-us.jpg" alt="">
                            </div>
                        </div>

                        <div>
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Try Bhuwaneswari
                            </h1>
                            <p class="">
                                Trainernya berpengalaman, materinya berkualitas, penyampaian materi sangat enak.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-5">
                    <div class="w-full h-[300] bg-white grid rounded-[20px] mb-5 p-7">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-[70px] h-[70px] object-cover rounded-lg" src="images\why-choose-us.jpg" alt="">
                            </div>
                        </div>

                        <div>
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Try Bhuwaneswari
                            </h1>
                            <p class="">
                                Trainernya berpengalaman, materinya berkualitas, penyampaian materi sangat enak.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-5">
                    <div class="w-full h-[300] bg-white grid rounded-[20px] mb-5 p-7">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-[70px] h-[70px] object-cover rounded-lg" src="images\why-choose-us.jpg" alt="">
                            </div>
                        </div>

                        <div>
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Try Bhuwaneswari
                            </h1>
                            <p class="">
                                Trainernya berpengalaman, materinya berkualitas, penyampaian materi sangat enak.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-5">
                    <div class="w-full h-[300] bg-white grid rounded-[20px] mb-5 p-7">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-[70px] h-[70px] object-cover rounded-lg" src="images\why-choose-us.jpg" alt="">
                            </div>
                        </div>

                        <div>
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Try Bhuwaneswari
                            </h1>
                            <p class="">
                                Trainernya berpengalaman, materinya berkualitas, penyampaian materi sangat enak.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-5">
                    <div class="w-full h-[300] bg-white grid rounded-[20px] mb-5 p-7">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-[70px] h-[70px] object-cover rounded-lg" src="images\why-choose-us.jpg" alt="">
                            </div>
                        </div>

                        <div>
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Try Bhuwaneswari
                            </h1>
                            <p class="">
                                Trainernya berpengalaman, materinya berkualitas, penyampaian materi sangat enak.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
<style>
    @property --num {
        syntax: '<integer>';
        initial-value: 0;
        inherits: false;
    }
</style>
