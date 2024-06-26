<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'Home')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    {{-- Section 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-full lg:h-[680px] overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-contain lg:object-cover" src="{{ asset('/images/hero-image.gif') }}">
            <div class="flex h-full items-center justify-center relative">
                <div class="flex flex-col justify-center items-center h-full">
                    <div class="text-8xl lg:text-5xl font-semibold text-black max-w-full pb-6 leading tight">
                        PASSION FOR <br> COMPASSION
                    </div>
                    <p class="text-3xl lg:text-lg leading-10 lg:leading-8 text-black max-w-[580px] lg:max-w-[520px] md:max-w-[460px] text-center pb-10">
                        Tingkatkan kualitas dirimu bersama Citra Prestasi Gemilang dan jalankan kehidupanmu dengan gairah
                        welas asih,
                        untuk saling menyayangi sesama manusia dan makhluk hidup.
                    </p>
                    <a href="{{ route('about') }}">
                        <button class="text-3xl lg:text-base bg-black px-12 py-6 lg:px-8 lg:py-4 text-white font-bold text-center rounded-full hover:bg-orange-500">
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
            <div data-aos="lg:fade-up" data-aos-duration="1500" class="text-6xl lg:text-4xl font-bold text-black max-w-[580px] mb-10">
                Our Clients
            </div>

            <div data-aos="lg:fade-up" data-aos-duration="1500"
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
                <button data-aos="lg:fade-up" data-aos-duration="1500" type="button"
                    class="text-white bg-black hover:bg-orange-500 focus:outline-none focus:ring-4 font-medium rounded-full text-3xl lg:text-lg px-8 py-4 lg:px-5 lg:py-2.5 text-center me-2 mb-2 ">See
                    More</button>
            </a>

        </div>
    </div>


    {{-- Section 3 UPCOMING EVENT --}}
    <div class="bg-white max-w-full h-auto text-center">
        <div data-aos="lg:fade-up" data-aos-duration="1500" class="flex flex-col justify-center mb-14">
            <p class="text-3xl lg:text-lg leading-8 text-orange-400 max-w-full mt-20 font-bold">
                SCHEDULE
            </p>
            <div class="text-6xl lg:text-4xl font-bold text-black max-w-full m-5">
                Upcoming Event
            </div>

            <p class="text-3xl lg:text-lg leading-8 text-black max-w-full mb-10">
                Jangan lewatkan agenda kami!
            </p>

            <div data-aos="lg:fade-up" data-aos-duration="1500"
                class="grid lg:grid-cols-3 grid-cols-1 gap-10 mx-28 lg:mx-52 mb-12 sm:content-center place-items-center">
                {{-- CARD BLOG --}}
                <div
                    class="lg:w-full sm:w-2/3 h-auto border border-gray-200 rounded-lg shadow-2xl ">
                    {{-- <a href=""> --}}
                        <img class="object-cover w-full rounded-t-lg place-items-center" src="{{ asset('images/upcoming/event-1.png') }}"
                            alt="" />
                    {{-- </a> --}}
                </div>

                <div
                    class="lg:w-full sm:w-2/3 h-auto border border-gray-200 rounded-lg shadow-2xl ">
                    {{-- <a href=""> --}}
                        <img class="object-cover w-full rounded-t-lg place-items-center" src="{{ asset('images/upcoming/event-2.png') }}"
                            alt="" />
                    {{-- </a> --}}
                </div>

                <div
                    class="lg:w-full m:w-2/3 h-auto border border-gray-200 rounded-lg shadow-2xl ">
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
    <div class="grid w-full h-auto lg:flex lg:flex-row bg-orange-500 px-16 py-36 lg:py-24 lg:px-36 lg:p-24  sm:items-center sm:justify-center">
        <div data-aos="lg:fade-up" data-aos-duration="1500" class="w-full lg:w-1/2 mb-10 lg:mb-0 lg:mr-10 lg:items-start sm:items-center sm:justify-center">
            <div class="text-6xl lg:text-5xl text-white mb-10 font-bold">
                Why Choose Us?
            </div>

            <div class="">
                <img class="object-cover w-full lg:h-[380px] lg:w-[550px] rounded-[20px]"
                    src="{{ asset('images\why-choose-us.jpg') }}" alt="">
            </div>
        </div>
        <div data-aos="lg:fade-up" data-aos-duration="1500" class="w-full lg:w-1/2 justify-center items-center ">
            <div class="text-4xl lg:text-6xl text-white mb-10 flex flex-wrap">
                <div class="mr-20 lg:mr-8">
                    <span
                        class="mb-3 flex tabular-nums text-6xl lg:text-5xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                        x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:100]'">
                        <span class="supports-[counter-set]:sr-only"></span>+
                    </span>
                    <div class="text-2xl lg:text-base text-white w-full max-w-[150px]">
                        Client
                    </div>
                </div>
                <div class="mr-20 lg:mr-0">
                    <span
                        class="mb-3 flex tabular-nums text-6xl lg:text-5xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                        x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:100]'">
                        <span class="supports-[counter-set]:sr-only"></span>+
                    </span>
                    <div class="text-2xl lg:text-base text-white w-full max-w-[150px]">
                        Training and Certification
                    </div>
                </div>
                <div class="">
                    <span
                        class="mb-3 flex tabular-nums text-6xl lg:text-5xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                        x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:3600]'">
                        <span class="supports-[counter-set]:sr-only"></span>+
                    </span>
                    <div class="text-2xl lg:text-base text-white w-full max-w-[200px]">
                        Alumni peserta pelatihan dan sertifikasi
                    </div>
                </div>
            </div>

            <div class="grid text-orange-100">
                <div class="flex mb-10 border-b border-white border-solid lg:max-w-[500px] sm:w-full">
                    <div class="w-full lg:max-w-[235px] pr-2 mb-3 mr-5">
                        <div class="font-bold mb-5 lg:mb-2 text-4xl lg:text-lg text-white">
                            Big Expansion
                        </div>
                        <p class="text-2xl leading-tight lg:text-sm pb-5 lg:pb-2">
                            Lebih dari satu dekade pengalaman, kami memiliki keterampilan mendalam untuk memberi solusi yang
                            efektif dan inovatif
                        </p>
                    </div>
                    <div class="w-full lg:max-w-[235px] mb-3">
                        <div class="font-bold  mb-5 lg:mb-2 text-4xl lg:text-lg text-white">
                            Commitmen to Quality
                        </div>
                        <p class="text-2xl leading-tight lg:text-sm pb-5 lg:pb-2">
                            Kami menyediakan pendampingan yang berfokus pada pertumbuhan dan pengembangan yang berkelanjutan
                        </p>
                    </div>
                </div>

                <div class="flex border-b mb-5 border-white border-solid lg:max-w-[500px] sm:w-full">
                    <div class="w-full lg:max-w-[235px] mb-3 mr-5">
                        <div class="font-bold mb-5 lg:mb-2 text-4xl lg:text-lg text-white">
                            Professional Team
                        </div>
                        <p class="text-2xl leading-tight lg:text-sm pb-5 lg:pb-2">
                            Tim kami terdiri dari ahli yang berpengalaman dan berkomitmen memberikan layanan berkualitas
                            kepada klien kami
                        </p>
                    </div>
                    <div class="w-full lg:max-w-[235px]">
                        <div class="font-bold mb-5 lg:mb-2 text-4xl lg:text-lg text-white">
                            After Service Experience
                        </div>
                        <p class="text-2xl leading-tight lg:text-sm pb-5 lg:pb-2">
                            Layanan free coaching setelah kegiatan training dan sertifikasi
                        </p>
                    </div>
                </div>

                <a href="{{ route('about') }}">
                    <button
                        class="bg-black hover:bg-orange-700 py-6 px-10 lg:px-8 lg:py-4 text-white font-bold text-center text-4xl lg:text-base rounded-full mt-5 lg:max-w-[200px]">
                        Learn More!
                    </button>
                </a>
            </div>
        </div>

    </div>

    {{-- Section 5 OUR PROGRAM --}}
    <div class="bg-white max-w-full grid lg:flex px-16 lg:px-20 py-36 lg:py-20">
        <div data-aos="lg:fade-up" data-aos-duration="1500" class="w-full lg:max-w-[480px] mb-5 lg:mb-0 lg:m-10">
            <div class="w-full lg:max-w-[580px] my-0 lg:m-5 text-6xl lg:text-5xl text-black mb-10 font-bold">
                Our Program
            </div>

            <p class="text-4xl lg:text-lg leading-normal text-black w-full lg:max-w-[580px] mx-0 lg:mx-5">
                Dapatkan keunggulan kompetitif melalui layanan kami yang komprehensif dalam Training, Consulting,
                Organizing, dan Assesment Center
            </p>
        </div>
        <div class="flex lg:grid">
            <div data-aos="lg:fade-up" data-aos-duration="1500" class="grid grid-cols-2 gap-4 mb-16 pt-5 lg:pt-16">
                <div class="bg-orange-500 max-w-[400px] max-h-96 p-10 rounded-[20px]">
                    <h1 class="text-4xl lg:text-2xl font-bold text-white text-left mb-3">
                        Training
                    </h1>
                    <p class="text-2xl lg:text-sm text-white">
                        Training untuk kalangan dunia pendidikan, perusahaan, instansi atau masyarakat luas.
                    </p>
                    <a href="{{ route('training') }}">
                        <div class="text-white mt-5 font-bold text-2xl lg:text-base hover:text-blue-800">
                            Learn More
                        </div>
                    </a>
                </div>

                <div class="bg-orange-500 max-w-[400px] max-h-96 p-10 rounded-[20px]">
                    <h1 class="text-4xl lg:text-2xl font-bold text-white text-left mb-3">
                        Consulting
                    </h1>
                    <p class="text-2xl lg:text-sm text-white">
                        Pemecahan masalah yang dihadapi dengan bantuan konsultan berpengalaman.
                    </p>
                    <a href="{{ route('consulting') }}">
                        <div class="text-white mt-5 font-bold text-2xl lg:text-base hover:text-blue-800">
                            Learn More
                        </div>
                    </a>
                </div>

                <div class="bg-orange-500 max-w-[400px] max-h-96 p-10 rounded-[20px]">
                    <h1 class="text-4xl lg:text-2xl font-bold text-white text-left mb-3">
                        Organizing
                    </h1>
                    <p class="text-2xl lg:text-sm text-white">
                       Menjelajah, menyusun, dan mengelola segala hal, dari ide hingga eksekusi,
                        untuk menciptakan dampak yang berarti. </p>
                    <a href="{{ route('organizing') }}">
                        <div class="text-white mt-5 font-bold text-2xl lg:text-base hover:text-blue-800">
                            Learn More
                        </div>
                    </a>
                </div>

                <div class="bg-orange-500 max-w-[400px] max-h-96 p-10 rounded-[20px]">
                    <h1 class="text-4xl lg:text-2xl font-bold text-white text-left mb-3">
                        Assesment Center
                    </h1>
                    <p class="text-2xl lg:text-sm text-white">
                        Kompetensi yang sesuai dengan standar internasional, membawa peserta pada
                        pencapaian terbaik mereka. </p>
                    <a href="{{ route('assesment-center') }}">
                        <div class="text-white mt-5 font-bold text-2xl lg:text-base hover:text-blue-800">
                            Learn More
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 6 INTERNSHIP  --}}
    <div class="bg-white mb-36 lg:mb-28 px-3">
        <div data-aos="lg:fade-up" data-aos-duration="1500" class="flex justify-between items-center mx-16 lg:mx-32">
            <div class="max-w-[580px] my-5 text-6xl lg:text-5xl text-black mb-10 font-bold">
                Internship
            </div>
            <a href="{{ route('internship') }}">
                <button class="bg-black hover:bg-orange-600 px-6 py-2 max-h-12 text-white font-bold text-2xl lg:text-base text-center rounded-full">
                    See All
                </button>
            </a>
        </div>

        <div data-aos="lg:fade-up" data-aos-duration="1500"
            class="grid lg:grid-cols-2 grid-cols-1 gap-10 gap-y-10 lg:mx-52 mx-36 mb-12 content-center place-items-center">
            <div class="w-full lg:w-full h-72 border border-gray-200 rounded-lg shadow-2xl mb-16 lg:mb-0">
                <img class="object-cover w-full h-full rounded-lg place-items-center"
                    src="{{ asset('/images/internship/internbg.png') }}" alt="MSIB Batch 6 (Februari - Juni 2024)" />
                <p id="teks" class="font-medium text-2xl lg:text-xl mt-5">
                    MSIB Batch 6 (Februari - Juni 2024)
                </p>
            </div>

            <div class="w-full lg:w-full h-72 border border-gray-200 rounded-lg shadow-2xl ">
                <img class="object-cover w-full h-full rounded-lg place-items-center"
                    src="{{ asset('/images/internship/magang-smk-1.jpg') }}" alt="Magang SMK OTKP/MPLB" />
                <p id="teks" class="font-medium text-2xl lg:text-xl mt-5">
                    Magang SMK OTKP/MPLB
                </p>
            </div>
        </div>
    </div>

    {{-- Section 7 FAQ --}}
    <div class="grid w-full lg:flex lg:flex-row bg-orange-500 lg:px-36 lg:p-24 lg:py-24 py-36 px-16 sm:items-center sm:justify-center">
        <div data-aos="lg:fade-up" data-aos-duration="1500" class="lg:w-1/2">
            <div class="text-6xl lg:text-5xl text-white first-line:mb-10 font-bold mb-10 lg:mb-5 lg:items-start sm:items-center sm:justify-center">
                Frequently Asked Questions
            </div>
            <div class="mr-0 lg:mr-20">
                <img class="object-cover w-full lg:w-[550px] h-[331px] rounded-[20px] justify-center items-center "
                    src="{{ asset('images\faq.jpg') }}" alt="">
            </div>
        </div>
        <div data-aos="lg:fade-up" data-aos-duration="1500" class="w-full lg:w-1/2 mt-10 lg:mt-0 justify-center items-center place-items-center">
            <div class="display grid text-orange-100">
                <div class="grid w-full lg:max-w-[600px]">
                    <div class=" pr-2 mb-8">
                        <div class="font-bold leading-normal mb-5 text-4xl lg:text-xl text-white ">
                            Bagaimana cara mendaftar pelatihan atau event lainnya di CPG?
                        </div>
                        <p class="text-3xl leading-tight lg:text-sm pb-5  border-b border-white border-solid">
                            Cara mendaftarnya bisa langsung mengisi link pendaftaran yang tersedia,
                            dan apabila ada pertanyaan lain bisa menghubungi contact person atau admin.
                        </p>
                    </div>

                    <div class=" pr-2 mb-8">
                        <div class="font-bold leading-normal mb-5 text-4xl lg:text-xl text-white">
                            Apakah sertifikat dari CPG cukup kuat untuk melamar pekerjaan?
                        </div>
                        <p class="text-3xl leading-tight lg:text-sm pb-5  border-b border-white border-solid">
                            Sertifikat CPG bisa digunakan untuk melamar pekerjaan sebagai pendukung portofolio peserta.
                            Jika pelatihan terdapat program sertifikasi keahlian,
                            sertifikasi dapat membantu peserta dalam melamar pekerjaan.
                        </p>
                    </div>

                    <div class=" pr-2 mb-8">
                        <div class="font-bold leading-normal mb-5 text-4xl lg:text-xl text-white">
                            Apakah pelatihan CPG ini hanya bisa diikuti secara online saja?
                        </div>
                        <p class="text-3xl leading-tight lg:text-sm pb-5 border-b border-white border-solid">
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
        <div class="flex flex-col py-36 lg:py-10">
            <div data-aos="lg:fade-up" data-aos-duration="1500" class="flex justify-between items-center my-10 mx-16 lg:mx-36">
                <div class="max-w-[580px] m-5 text-6xl lg:text-5xl text-black mb-10 font-bold">
                    Video
                </div>
                <a href="http://www.youtube.com/@citraprestasigemilang655" target="_blank">
                    <button class="bg-black px-6 py-2 max-h-12 text-white font-bold text-2xl lg:text-base text-center rounded-full">
                        See More!
                    </button>
                </a>
            </div>

            <div data-aos="lg:fade-up" data-aos-duration="1500"
                class="flex justify-center flex-wrap gap-5 lg:gap-30 pb-20 px-20">
                <div class="w-full lg:w-1/4">
                    <iframe class="w-full aspect-video"
                        src="https://www.youtube.com/embed/kvUAwvpWHrA?si=zzuAfovcryTSfUMc" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h1 class="mt-5 text-4xl lg:text-lg font-bold leading-normal text-black text-left">CORPORATE SOCIAL RESPONSIBILITY</h1>
                </div>
                <div class="w-full lg:w-1/4">
                    <iframe class="w-full aspect-video"
                        src="https://www.youtube.com/embed/jMxJP1XJc0I?si=uNKMVA5WqaUnF9CW" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h1 class="mt-5 text-4xl lg:text-lg font-bold leading-normal text-black text-left">PUBLIC SPEAKING #2</h1>
                </div>
                <div class="w-full lg:w-1/4">
                    <iframe class="w-full aspect-video"
                        src="https://www.youtube.com/embed/PE7s-6iBuQ0?si=RSL2PYTHZJyYqZJa" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h1 class="mt-5 text-4xl lg:text-lg font-bold leading-normal text-black text-left">CSR SEBAGAI TANGGUNG JAWAB MORAL (CSR
                        VOL.2)</h1>
                </div>
            </div>

        </div>
    </div>

    {{-- Section 9 WHAT THEY SAY --}}
    <div class="bg-orange-500 max-w-full">
        <div class="flex flex-col px-16 py-36 lg:px-36 lg:py-24">
            <div data-aos="lg:fade-up" data-aos-duration="1500" class="flex justify-between items-center mb-10">
                <div class="text-6xl lg:text-5xl font-bold text-white max-w-[580px] lg:m-5">
                    What They Say About Our Program
                </div>
            </div>

            <div data-aos="lg:fade-up" data-aos-duration="1500"
                class="flex justify-center flex-wrap gap-x-5 lg:gap-x-10">
                {{-- TESTIMONIAL 1  --}}
                <div class="w-full lg:w-1/4 mb-5">
                    <div class="w-full h-fit lg:h-[480px] bg-white flex flex-col rounded-[20px] mb-5 p-7 items-start">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-36 h-36 aspect-square lg:w-[70px] lg:h-[70px] object-cover rounded-lg"
                                    src="{{ asset('images/testimoni/pak yunus.jpg') }}"
                                    alt="Dr. Ir. Yunus Triyonggo, M. M., CAHRI">
                            </div>
                        </div>

                        <div class="items-start">
                            <h1 class="mb-3 text-orange-500 font-semibold text-2xl lg:text-base">
                                Dr. Ir. Yunus Triyonggo, M. M., CAHRI
                                <br> Ketua SC Gerakan Nasional Indonesia Kompeten (GNIK)
                            </h1>
                            <p class="text-2xl lg:text-base">
                                Saya salut dan bangga kepada PG Citra Prestasi Gemilang yang telah memberikan fasilitasi
                                pelatihan kepada 40 Guru Instruktur BLK
                                dan masyarakat serta peserta magang dari Kemnaker RI dan Kemdikbud.
                                Keren sekali dan teruskan perjuanganmu!
                            </p>
                        </div>

                    </div>
                </div>

                {{-- TESTIMONIAL 2  --}}
                <div class="w-full lg:w-1/4 mb-5">
                    <div class="w-full h-fit lg:h-[480px] bg-white flex flex-col rounded-[20px] mb-5 p-7 items-start">
                        <div class="flex justify-start mb-5">
                            <div class="rounded mr-2">
                                <img class="w-36 h-36 aspect-square lg:w-[70px] lg:h-[70px] object-cover rounded-lg"
                                    src="{{ asset('images/testimoni/pak wachid.jpg') }}" alt="Drs.Wachid Djarwono, M.Si">
                            </div>
                        </div>

                        <div class="items-start">
                            <h1 class="mb-3 text-orange-500 font-semibold text-2xl lg:text-base">
                                Drs.Wachid Djarwono, M.Si <br> Anggota Dewan Pendidikan Nganjuk
                            </h1>
                            <p class="text-2xl lg:text-base">
                                Kepedulian dan komitmen PT Citra Prestasi Gemilang dalam turut serta membangun SDM guru SMK
                                selama ini,
                                patut diapresiasi.
                            </p>
                        </div>

                    </div>
                </div>

                {{-- TESTIMONIAL 3 --}}
                <div class="w-full lg:w-1/4 mb-5">
                    <div class="w-full h-fit lg:h-[480px] bg-white flex flex-col rounded-[20px] mb-5 p-7 items-start">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-36 h-36 aspect-square lg:w-[70px] lg:h-[70px] object-cover rounded-lg"
                                    src="{{ asset('images/testimoni/yunita.JPG') }}" alt="Yunita">
                            </div>
                        </div>

                        <div class="items-start">
                            <h1 class="mb-3 text-orange-500 font-semibold text-2xl lg:text-base">
                                Yunita <br> Trainer Associate PT Citra Prestasi Gemilang Branch Jakarta
                            </h1>
                            <p class="text-2xl lg:text-base">
                                Kebanggaan tersendiri bagi saya dapat bergabung dan menjadi bagian dari team support Citra
                                Prestasi Gemilang,
                                kolaborasi yang dilakukan selalu menciptakan energi positif bagi saya maupun rekan lain.
                                Sukses terus CPG, Passion for Compassion.
                            </p>
                        </div>

                    </div>
                </div>

                {{-- TESTIMONIAL 4  --}}
                <div class="w-full lg:w-1/4 mb-5">
                    <div class="w-full h-fit lg:h-[480px] bg-white flex flex-col rounded-[20px] mb-5 p-7 items-start">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-36 h-36 aspect-square lg:w-[70px] lg:h-[70px] object-cover rounded-lg" 
                                src="images\why-choose-us.jpg"
                                    alt="">
                            </div>
                        </div>

                        <div class="items-start">
                            <h1 class="mb-3 text-orange-500 font-semibold text-2xl lg:text-base">
                                Meyranti Iloe <br> SMK Negeri 1 Prajekan
                            </h1>
                            <p class="text-2xl lg:text-base">
                                CSR ini sangat bermanfaat bagi saya selaku guru. Terima kasih PT Citra Prestasi Gemilang
                                yang selalu peduli pada masyarakat pendidikan, sukses selalu!
                            </p>
                        </div>
                    </div>
                </div>

                {{-- TESTIMONIAL 5  --}}
                <div class="w-full lg:w-1/4 mb-5">
                    <div class="w-full h-fit lg:h-[480px] bg-white flex flex-col rounded-[20px] mb-5 p-7 items-start">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-36 h-36 aspect-square lg:w-[70px] lg:h-[70px] object-cover rounded-lg"
                                    src="{{ asset('images/testimoni/ellisa.JPG') }}" alt="Ellisa Fadia Laili">
                            </div>
                        </div>

                        <div class="items-start">
                            <h1 class="mb-3 text-orange-500 font-semibold text-2xl lg:text-base">
                                Ellisa Fadia Laili <br> UIN Maulana Malik Ibrahim Malang
                            </h1>
                            <p class="text-2xl lg:text-base">
                                Terima kasih CPG, selama magang disini menambah hal dan tantangan baru.
                                Tim pemagang juga seru dan terbuka satu sama lain. Sukses selalu CPG!
                            </p>
                        </div>

                    </div>
                </div>


                {{-- TESTIMONIAL 6  --}}
                <div class="w-full lg:w-1/4 mb-5">
                    <div class="w-full h-fit lg:h-[480px] bg-white flex flex-col rounded-[20px] mb-5 p-7 items-start">
                        <div class="flex justify-start items-end mb-5">
                            <div class="rounded mr-2">
                                <img class="w-36 h-36 aspect-square lg:w-[70px] lg:h-[70px] object-cover rounded-lg"
                                    src="{{ asset('images/testimoni/try.JPG') }}" alt="">
                            </div>
                        </div>

                        <div class="items-start">
                            <h1 class="mb-3 text-orange-500 font-semibold text-2xl lg:text-base">
                                Try Bhuwaneswari <br> Universitas Brawijaya
                            </h1>
                            <p class="text-2xl lg:text-base">
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
