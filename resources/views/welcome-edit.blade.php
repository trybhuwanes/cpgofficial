<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'Home')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    {{-- Section 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-fit md:w-full sm:h-full overflow-hidden relative items-center justify-center">
            <img class="absolute inset-0 h-full w-full xl:object-cover md:object-contain sm:object-contain" src="{{ asset('/images/hero-image.gif') }}">
            <div class="flex h-full items-center justify-center relative">
                <div class="flex flex-col justify-center items-center h-full">
                    <div class="xl:text-5xl md:text-8xl sm:text-8xl font-semibold text-black max-w-full pb-6 leading tight">
                        PASSION FOR <br> COMPASSION
                    </div>
                    <p class="xl:text-lg  md:text-3xl sm:text-3xl leading-8 text-black xl:max-w-[520px] md:w-full sm:w-full xl:px-0 md:px-24 sm:px-36 text-center pb-10">
                        Tingkatkan kualitas dirimu bersama Citra Prestasi Gemilang dan jalankan kehidupanmu dengan gairah
                        welas asih,
                        untuk saling menyayangi sesama manusia dan makhluk hidup.
                    </p>
                    <a href="{{ route('about') }}">
                        <button class="bg-black xl:px-8 xl:py-4 md:px-14 md:py-8 sm:px-14 sm:py-8 text-white font-bold text-center xl:text-base sm:text-3xl rounded-full hover:bg-orange-500">
                            Improve With Us!
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 2 OUR CLIENTS --}}
    <div class="bg-white max-w-full h-autotext-center pt-16">
        <div class="flex flex-col justify-center items-center">
            <div data-aos="fade-up" data-aos-duration="1500" class="xl:text-4xl sm:text-6xl font-bold text-black max-w-[580px] mb-10">
                Our Clients
            </div>

            <div data-aos="fade-up" data-aos-duration="1500"
                class="flex justify-center items-center h-full mb-10 space-x-10">
                <img class="h-20 mr-5" src="{{ asset('images\logo\kementerian\KEMNAKER.png') }}" alt="Kemnaker"
                    class="mx-auto">
                <img class="h-20 mr-5" src="{{ asset('images\logo\kementerian\kemdikbud.png') }}" alt="Kemendikbud"
                    class="mx-auto">
                <img class="h-20 mr-5" src="{{ asset('images\logo\kementerian\kemenparekraf.png') }}" alt="kemenparekraf"
                    class="mx-auto">
                <img class="h-20 mr-5" src="{{ asset('images\logo\kementerian\bappenas.png') }}" alt="bappenas"
                    class="mx-auto">
                <img class="h-20 mr-5" src="{{ asset('images\logo\kementerian\KOMINFO.png') }}" alt="kominfo"
                    class="mx-auto">
            </div>

            <a href="{{ route('collaboration') }}">
                <button data-aos="fade-up" data-aos-duration="1500" type="button"
                    class="text-white bg-black hover:bg-orange-500 focus:outline-none focus:ring-4 font-medium rounded-full xl:text-lg sm:text-3xl xl:px-5 sm:px-8 xl:py-2.5 sm:py-4 text-center me-2 mb-2 ">See
                    More</button>
            </a>

        </div>
    </div>


    {{-- Section 3 UPCOMING EVENT --}}
    <div class="bg-white max-w-full h-auto text-center">
        <div data-aos="fade-up" data-aos-duration="1500" class="flex flex-col justify-center mb-14">
            <p class="xl:text-lg sm:text-3xl leading-8 text-orange-400 max-w-full mt-20 font-bold">
                SCHEDULE
            </p>
            <div class="xl:text-4xl sm:text-6xl font-bold text-black max-w-full m-5">
                Upcoming Event
            </div>

            <p class="xl:text-lg sm:text-3xl leading-8 text-black max-w-full mb-10">
                Jangan lewatkan agenda kami!
            </p>

            <div data-aos="fade-up" data-aos-duration="1500"
                class="grid xl:grid-cols-3 lg:grid-cols-2 sm:grid-cols-1 gap-10 xl:mx-52 sm:mx-10 mb-12 sm:content-center place-items-center">
                {{-- CARD BLOG --}}
                <div
                    class="xl:w-full lg:w-full sm:w-2/3 h-auto border border-gray-200 rounded-lg shadow-2xl ">
                    {{-- <a href=""> --}}
                        <img class="object-cover w-full rounded-t-lg place-items-center" src="{{ asset('images/upcoming/event-1.png') }}"
                            alt="" />
                    {{-- </a> --}}
                </div>

                <div
                    class="xl:w-full lg:w-full sm:w-2/3 h-auto border border-gray-200 rounded-lg shadow-2xl ">
                    {{-- <a href=""> --}}
                        <img class="object-cover w-full rounded-t-lg place-items-center" src="{{ asset('images/upcoming/event-2.png') }}"
                            alt="" />
                    {{-- </a> --}}
                </div>

                <div
                    class="xl:w-full lg:w-full sm:w-2/3 h-auto border border-gray-200 rounded-lg shadow-2xl ">
                    {{-- <a href=""> --}}
                        <img class="object-cover w-full rounded-t-lg place-items-center" src="{{ asset('images/upcoming/event-3.png') }}"
                            alt="" />
                    {{-- </a> --}}
                </div>

            </div>
        </div>
        {{-- <a href="{{ route('training') }}">
            <button data-aos="fade-up" data-aos-duration="1500"
                class="bg-black px-8 py-4 text-white font-bold text-center rounded-full mb-20 hover:bg-orange-500">
                Learn More!
            </button>
        </a> --}}
    </div>

    {{-- Section 4 WHY CHOOSE US --}}
    <div class="grid w-full h-auto xl:flex xl:flex-row bg-orange-500 xl:px-36 sm:px-16 xl:p-24 sm:py-24 sm:items-center sm:justify-center">
        <div data-aos="fade-up" data-aos-duration="1500" class="w-full xl:w-1/2 mb-10 xl:mb-0 xl:mr-10 xl:items-start sm:items-center sm:justify-center">
            <div class="xl:text-5xl sm:text-6xl text-white mb-10 font-bold">
                Why Choose Us?
            </div>

            <div class="">
                <img class="object-cover w-full h-[380px] xl:w-[550px] sm:w-full rounded-[20px]"
                    src="{{ asset('images\why-choose-us.jpg') }}" alt="">
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" class="sm:w-full md:w-full xl:w-1/2 justify-center items-center ">
            <div class="text-4xl xl:text-6xl text-white mb-10 flex flex-wrap">
                <div class="xl:mr-10 sm:mr-20">
                    <span
                        class="mb-3 flex tabular-nums text-4xl xl:text-5xl sm:text-6xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                        x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:100]'">
                        <span class="supports-[counter-set]:sr-only"></span>+
                    </span>
                    <div class="xl:text-base sm:text-xl text-white w-full max-w-[150px]">
                        Client
                    </div>
                </div>
                <div class="xl:mr-0 sm:mr-20">
                    <span
                        class="mb-3 flex tabular-nums text-4xl xl:text-5xl sm:text-6xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                        x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:100]'">
                        <span class="supports-[counter-set]:sr-only"></span>+
                    </span>
                    <div class="xl:text-base sm:text-xl text-white w-full max-w-[150px]">
                        Training and Certification
                    </div>
                </div>
                <div class="">
                    <span
                        class="mb-3 flex tabular-nums text-4xl xl:text-5xl sm:text-6xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                        x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:3600]'">
                        <span class="supports-[counter-set]:sr-only"></span>+
                    </span>
                    <div class="xl:text-base sm:text-xl text-white w-full max-w-[200px]">
                        Alumni peserta pelatihan dan sertifikasi
                    </div>
                </div>
            </div>

            <div class="grid text-orange-100">
                <div class="flex mb-10 border-b border-white border-solid xl:max-w-[500px] sm:w-full">
                    <div class="xl:max-w-[235px] sm:w-full pr-2 mb-3 mr-5">
                        <div class="font-bold mb-2 text-base xl:text-lg sm:text-3xl text-white">
                            Big Expansion
                        </div>
                        <p class="xl:text-sm sm:text-xl pb-2">
                            Lebih dari satu dekade pengalaman, kami memiliki keterampilan mendalam untuk memberi solusi yang
                            efektif dan inovatif
                        </p>
                    </div>
                    <div class="xl:max-w-[235px] sm:w-full mb-3">
                        <div class="font-bold mb-2 text-base xl:text-lg sm:text-3xl text-white">
                            Commitmen to Quality
                        </div>
                        <p class="xl:text-sm sm:text-xl pb-2">
                            Kami menyediakan pendampingan yang berfokus pada pertumbuhan dan pengembangan yang berkelanjutan
                        </p>
                    </div>
                </div>

                <div class="flex border-b mb-5 border-white border-solid xl:max-w-[500px] sm:w-full">
                    <div class="xl:max-w-[235px] sm:w-full mb-3 mr-5">
                        <div class="font-bold mb-2 text-base xl:text-lg sm:text-3xl text-white">
                            Professional Team
                        </div>
                        <p class="text-sm pb-2">
                            Tim kami terdiri dari ahli yang berpengalaman dan berkomitmen memberikan layanan berkualitas
                            kepada klien kami
                        </p>
                    </div>
                    <div class="xl:max-w-[235px] sm:w-full">
                        <div class="font-bold mb-2 text-base xl:text-lg sm:text-3xl text-white">
                            After Service Experience
                        </div>
                        <p class="xl:text-sm sm:text-xl pb-2">
                            Layanan free coaching setelah kegiatan training dan sertifikasi
                        </p>
                    </div>
                </div>

                <a href="{{ route('about') }}">
                    <button
                        class="bg-black hover:bg-orange-700 xl:px-8 xl:py-4 sm:py-6 sm:px-10 text-white font-bold text-center xl:text-base sm:text-2xl rounded-full mt-5 xl:max-w-[200px]">
                        Learn More!
                    </button>
                </a>
            </div>
        </div>

    </div>

    {{-- Section 5 OUR PROGRAM --}}
    <div class="bg-white max-w-full grid xl:flex xl:px-20 sm:px-16 pt-20">
        <div data-aos="fade-up" data-aos-duration="1500" class="max-w-full xl:max-w-[480px] xl:m-10 sm:m-5 sm:mb-0">
            <div class="max-w-[580px] m-5 xl:text-5xl sm:text-6xl text-black mb-10 font-bold">
                Our Program
            </div>

            <p class="text-lg leading-8 text-black max-w-[580px] mx-5">
                Dapatkan keunggulan kompetitif melalui layanan kami yang komprehensif dalam Training, Consulting,
                Organizing, dan Assesment Center
            </p>
        </div>
        <div class="flex xl:grid">
            <div data-aos="fade-up" data-aos-duration="1500" class="grid grid-cols-2 gap-4 mb-16 xl:pt-16 sm:pt-5 xl:mx-16 sm:mx-10">
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
                        Organizing, kita akan menjelajahi seni menyusun dan mengelola segala hal, dari ide hingga eksekusi,
                        untuk menciptakan dampak yang berarti. </p>
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
                        Metode berbasis kompetensi yang sesuai dengan standar internasional, membawa peserta pada perjalanan
                        pencapaian terbaik mereka. </p>
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
    <div class="bg-white mb-28 xl:px-3 sm:px-8">
        <div data-aos="fade-up" data-aos-duration="1500" class="flex justify-between items-center xl:mx-32 sm:mx-16">
            <div class="max-w-[580px] my-5 xl:text-5xl sm:text-6xl text-black mb-10 font-bold">
                Internship
            </div>
            <a href="{{ route('internship') }}">
                <button class="bg-black xl:px-6 xl:py-2 sm:py-6 sm:px-8 xl:max-h-12 xl:text-base sm:text-2xl text-white font-bold text-center rounded-full">
                    See All
                </button>
            </a>
        </div>

        <div data-aos="fade-up" data-aos-duration="1500"
            class="grid xl:grid-cols-2 lg:grid-cols-2 sm:grid-cols-1 xl:gap-10 sm:gap-10 sm:gap-y-14 xl:mx-52 sm:mx-36 mb-12 sm:content-center place-items-center">
            <div class="xl:w-full lg:w-full sm:w-full h-72 border border-gray-200 rounded-lg shadow-2xl ">
                <img class="object-cover w-full h-full rounded-lg place-items-center"
                    src="{{ asset('/images/internship/internbg.png') }}" alt="MSIB Batch 6 (Februari - Juni 2024)" />
                <p id="teks" class="font-medium text-xl mt-5">
                    MSIB Batch 6 (Februari - Juni 2024)
                </p>
            </div>

            <div class="xl:w-full lg:w-full sm:w-full h-72 border border-gray-200 rounded-lg shadow-2xl ">
                <img class="object-cover w-full h-full rounded-lg place-items-center"
                    src="{{ asset('/images/internship/magang-smk-1.jpg') }}" alt="Magang SMK OTKP/MPLB" />
                <p id="teks" class="font-medium text-xl mt-5">
                    Magang SMK OTKP/MPLB
                </p>
            </div>
        </div>
    </div>

    {{-- Section 7 FAQ --}}
    <div class="grid w-full xl:flex xl:flex-row bg-orange-500 xl:px-36 xl:p-24 sm:py-24 sm:px-20 sm:items-center sm:justify-center">
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-1/2 sm:w-full">
            <div class="xl:text-5xl sm:text-6xl text-white first-line:mb-10 font-bold mb-5 xl:items-start sm:items-center sm:justify-center">
                Frequently Asked Questions
            </div>
            <div class="xl:mr-20 sm:mr-0">
                <img class="object-cover sm:w-full xl:w-[550px] h-[331px] rounded-[20px] justify-center items-center "
                    src="{{ asset('images\faq.jpg') }}" alt="">
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-1/2 xl:mt-0 sm:mt-6 justify-center items-center place-items-center">
            <div class="display grid text-orange-100">
                <div class="grid xl:max-w-[600px] sm:w-full">
                    <div class=" pr-2 mb-8">
                        <div class="font-bold xl:text-lg sm:text-3xl mb-4 text-xl text-white ">
                            Bagaimana cara mendaftar pelatihan atau event lainnya di CPG?
                        </div>
                        <p class="xl:text-sm sm:text-xl pb-5  border-b border-white border-solid">
                            Cara mendaftarnya bisa langsung mengisi link pendaftaran yang tersedia,
                            dan apabila ada pertanyaan lain bisa menghubungi contact person atau admin.
                        </p>
                    </div>

                    <div class=" pr-2 mb-8">
                        <div class="font-bold xl:text-lg sm:text-3xl mb-2 text-xl text-white">
                            Apakah sertifikat dari CPG cukup kuat untuk melamar pekerjaan?
                        </div>
                        <p class="xl:text-sm sm:text-xl text-sm pb-5  border-b border-white border-solid">
                            Sertifikat CPG bisa digunakan untuk melamar pekerjaan sebagai pendukung portofolio peserta.
                            Jika pelatihan terdapat program sertifikasi keahlian,
                            sertifikasi dapat membantu peserta dalam melamar pekerjaan.
                        </p>
                    </div>

                    <div class=" pr-2 mb-8">
                        <div class="font-bold xl:text-lg sm:text-3xl mb-2 text-xl text-white">
                            Apakah pelatihan CPG ini hanya bisa diikuti secara online saja?
                        </div>
                        <p class="xl:text-sm sm:text-xl text-sm pb-5 border-b border-white border-solid">
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
            <div data-aos="fade-up" data-aos-duration="1500" class="flex justify-between items-center my-10 xl:mx-36 sm:mx-16">
                <div class="max-w-[580px] m-5 xl:text-5xl sm:text-6xl text-black mb-10 font-bold">
                    Video
                </div>
                <a href="http://www.youtube.com/@citraprestasigemilang655" target="_blank">
                    <button class="bg-black xl:px-6 xl:py-2 sm:py-6 sm:px-8 xl:max-h-12 xl:text-base sm:text-2xl text-white font-bold text-center rounded-full">
                        See More!
                    </button>
                </a>
            </div>

            <div data-aos="fade-up" data-aos-duration="1500"
                class="flex justify-center flex-wrap sm:gap-5 md:gap-5 lg:gap-20 xl:gap-30 pb-20 px-20">
                <div class=" sm:w-auto md:w-full xl:w-1/4">
                    <iframe class="w-full aspect-video"
                        src="https://www.youtube.com/embed/kvUAwvpWHrA?si=zzuAfovcryTSfUMc" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h1 class="mt-5 text-lg font-bold leading-6 text-black text-left">CORPORATE SOCIAL RESPONSIBILITY</h1>
                </div>
                <div class=" sm:w-auto md:w-full xl:w-1/4">
                    <iframe class="w-full aspect-video"
                        src="https://www.youtube.com/embed/jMxJP1XJc0I?si=uNKMVA5WqaUnF9CW" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h1 class="mt-5 text-lg font-bold leading-6 text-black text-left">PUBLIC SPEAKING #2</h1>
                </div>
                <div class=" sm:w-auto md:w-full xl:w-1/4">
                    <iframe class="w-full aspect-video"
                        src="https://www.youtube.com/embed/PE7s-6iBuQ0?si=RSL2PYTHZJyYqZJa" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h1 class="mt-5 text-lg font-bold leading-6 text-black text-left">CSR SEBAGAI TANGGUNG JAWAB MORAL (CSR
                        VOL.2)</h1>
                </div>
            </div>

        </div>
    </div>

    {{-- Section 9 WHAT THEY SAY --}}
    <div class="bg-orange-500 max-w-full">
        <div class="flex flex-col xl:px-36 sm:px-16 py-24">
            <div data-aos="fade-up" data-aos-duration="1500" class="flex justify-between items-center mb-10">
                <div class="xl:text-5xl sm:text-6xl font-bold text-white max-w-[580px] xl:m-5 sm:m-0">
                    What They Say About Our Program
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1500"
                class="flex justify-center flex-wrap sm:gap-x-2 md:gap-x-5 lg:gap-x-10 xl:gap-x-10">
                {{-- TESTIMONIAL 1  --}}
                <div class="w-full sm:w-1/2 md:w-2/5 lg:w-1/4 xl:w-1/4 mb-5">
                    <div class="w-full xl:h-[480px] sm:h-[500px] bg-white flex flex-col rounded-[20px] mb-5 p-7 items-start">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-[70px] h-[70px] object-cover rounded-lg"
                                    src="{{ asset('images/testimoni/pak yunus.jpg') }}"
                                    alt="Dr. Ir. Yunus Triyonggo, M. M., CAHRI">
                            </div>
                        </div>

                        <div class="items-start">
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Dr. Ir. Yunus Triyonggo, M. M., CAHRI
                                <br> Ketua SC Gerakan Nasional Indonesia Kompeten (GNIK)
                            </h1>
                            <p class="xl:text-base sm:text-xl">
                                Saya salut dan bangga kepada PG Citra Prestasi Gemilang yang telah memberikan fasilitasi
                                pelatihan kepada 40 Guru Instruktur BLK
                                dan masyarakat serta peserta magang dari Kemnaker RI dan Kemdikbud.
                                Keren sekali dan teruskan perjuanganmu!
                            </p>
                        </div>

                    </div>
                </div>

                {{-- TESTIMONIAL 2  --}}
                <div class="w-full sm:w-1/2 md:w-2/5 lg:w-1/4 xl:w-1/4 mb-5">
                    <div class="w-full  xl:h-[480px] sm:h-[500px] bg-white flex flex-col rounded-[20px] mb-5 p-7 items-start">
                        <div class="flex justify-start mb-5">
                            <div class="rounded mr-2">
                                <img class="w-[70px] h-[70px] object-cover rounded-lg"
                                    src="{{ asset('images/testimoni/pak wachid.jpg') }}" alt="Drs.Wachid Djarwono, M.Si">
                            </div>
                        </div>

                        <div class="items-start">
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Drs.Wachid Djarwono, M.Si <br> Anggota Dewan Pendidikan Nganjuk
                            </h1>
                            <p class="xl:text-base sm:text-xl">
                                Kepedulian dan komitmen PT Citra Prestasi Gemilang dalam turut serta membangun SDM guru SMK
                                selama ini,
                                patut diapresiasi.
                            </p>
                        </div>

                    </div>
                </div>

                {{-- TESTIMONIAL 3 --}}
                <div class="w-full sm:w-1/2 md:w-2/5 lg:w-1/4 xl:w-1/4 mb-5">
                    <div class="w-full xl:h-[480px] sm:h-[500px] bg-white flex flex-col rounded-[20px] mb-5 p-7 items-start">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-[70px] h-[70px] object-cover rounded-lg"
                                    src="{{ asset('images/testimoni/yunita.JPG') }}" alt="Yunita">
                            </div>
                        </div>

                        <div class="items-start">
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Yunita <br> Trainer Associate PT Citra Prestasi Gemilang Branch Jakarta
                            </h1>
                            <p class="xl:text-base sm:text-xl">
                                Kebanggaan tersendiri bagi saya dapat bergabung dan menjadi bagian dari team support Citra
                                Prestasi Gemilang,
                                kolaborasi yang dilakukan selalu menciptakan energi positif bagi saya maupun rekan lain.
                                Sukses terus CPG, Passion for Compassion.
                            </p>
                        </div>

                    </div>
                </div>

                {{-- TESTIMONIAL 4  --}}
                <div class="w-full sm:w-1/2 md:w-2/5 lg:w-1/4 xl:w-1/4 mb-5">
                    <div class="w-full xl:h-[480px] sm:h-[500px] bg-white flex flex-col rounded-[20px] mb-5 p-7 items-start">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-[70px] h-[70px] object-cover rounded-lg" src="images\why-choose-us.jpg"
                                    alt="">
                            </div>
                        </div>

                        <div class="items-start">
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Meyranti Iloe <br> SMK Negeri 1 Prajekan
                            </h1>
                            <p class="xl:text-base sm:text-xl">
                                CSR ini sangat bermanfaat bagi saya selaku guru. Terima kasih PT Citra Prestasi Gemilang
                                yang selalu peduli pada masyarakat pendidikan, sukses selalu!
                            </p>
                        </div>
                    </div>
                </div>

                {{-- TESTIMONIAL 5  --}}
                <div class="w-full sm:w-1/2 md:w-2/5 lg:w-1/4 xl:w-1/4 mb-5">
                    <div class="w-full xl:h-[480px] sm:h-[500px] bg-white flex flex-col rounded-[20px] mb-5 p-7 items-start">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-[70px] h-[70px] object-cover rounded-lg"
                                    src="{{ asset('images/testimoni/ellisa.JPG') }}" alt="Ellisa Fadia Laili">
                            </div>
                        </div>

                        <div class="items-start">
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Ellisa Fadia Laili <br> UIN Maulana Malik Ibrahim Malang
                            </h1>
                            <p class="xl:text-base sm:text-xl">
                                Terima kasih CPG, selama magang disini menambah hal dan tantangan baru.
                                Tim pemagang juga seru dan terbuka satu sama lain. Sukses selalu CPG!
                            </p>
                        </div>

                    </div>
                </div>


                {{-- TESTIMONIAL 6  --}}
                <div class="w-full sm:w-1/2 md:w-2/5 lg:w-1/4 xl:w-1/4 mb-5">
                    <div class="w-full xl:h-[480px] sm:h-[500px] bg-white flex flex-col rounded-[20px] mb-5 p-7 items-start">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-[70px] h-[70px] object-cover rounded-lg"
                                    src="{{ asset('images/testimoni/try.JPG') }}" alt="">
                            </div>
                        </div>

                        <div class="items-start">
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Try Bhuwaneswari <br> Universitas Brawijaya
                            </h1>
                            <p class="xl:text-base sm:text-xl">
                                Mentornya kerennn. Menambah insight dan pengalaman dunia kerja.
                                Mentoring dan coaching yang diberikan juga sangat bermanfaat.
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
