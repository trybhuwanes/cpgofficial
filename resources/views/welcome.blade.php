<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'Home')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    {{-- Section 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full max-h-full shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="images\hero-image.jpg">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                {{-- <h1 class="text-4xl text-black font-semibold">BLOG</h1> --}}
                <div class="flex flex-col justify-center items-center h-full">
                    <div class="text-5xl font-semibold text-black max-w-full pb-6 leading tight">
                        PASSION FOR COMPASSION
                    </div>
                    <p class="text-lg leading-8 text-black max-w-[580px] text-center pb-12">
                        Tingkatkan kualitas dirimu bersama Citra Prestasi Gemilang dan jadilah pribadi baru untuk mengantar
                        anda
                        menuju kesuksesan dalam karir serta kehidupan.
                    </p>
                    <button class="bg-black px-8 py-4 text-white font-bold text-center rounded-full">
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
                <img class="h-20" src="images\kemnaker.png" alt="Kemnaker" class="mx-auto">
                <img class="h-20" src="images\kemdikbud.png" alt="Kemendikbud" class="mx-auto">
                <img class="h-20" src="images\kominfo.png" alt="kominfo" class="mx-auto">
                <img class="h-20" src="images\kemenparekraf.png" alt="kemenparekraf" class="mx-auto">
                <img class="h-20" src="images\bappenas.png" alt="bappenas" class="mx-auto">
            </div>

            <a href="#">
                <button data-aos="fade-up" data-aos-duration="1500" type="button" class="text-white bg-black hover:bg-orange-500 focus:outline-none focus:ring-4 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 ">See More</button>
            </a>

        </div>
    </div>


    {{-- Section 3 --}}
    <div class="bg-white max-w-full h-auto text-center">
        <div data-aos="fade-up" data-aos-duration="1500" class="flex flex-col justify-center">
            <p class="text-lg leading-8 text-orange-400 max-w-full mt-20">
                SCHEDULE
            </p>
            <div class="text-4xl font-bold text-black max-w-full m-5">
                Upcoming Event
            </div>

            <p class="text-lg leading-8 text-black max-w-full mb-10">
                Jangan lewatkan agenda kami!
            </p>

            <div data-aos="fade-up" data-aos-duration="1500" class="grid grid-cols-3 gap-10 mx-52 sm:mx-36 mb-12">
                {{-- CARD BLOG --}}
                <div
                    class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 max-w-1/3 h-auto border border-gray-200 rounded-lg shadow-2xl">
                    <a href="{{ route('blog-read') }}">
                        <img class="object-cover w-full rounded-t-lg" src="images\Flyer CSR 2024.png" alt="" />
                    </a>
                </div>

                <div
                    class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 max-w-1/3 h-auto border border-gray-200 rounded-lg shadow-2xl">
                    <a href="{{ route('blog-read') }}">
                        <img class="object-cover w-full rounded-t-lg" src="images\Flyer CSR 2024.png" alt="" />
                    </a>
                </div>

                <div
                    class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 max-w-1/3 h-auto border border-gray-200 rounded-lg shadow-2xl">
                    <a href="{{ route('blog-read') }}">
                        <img class="object-cover w-full rounded-t-lg" src="images\Flyer CSR 2024.png" alt="" />
                    </a>
                </div>
                <h1 class="text-lg font-bold leading-10 text-black text-center">Lorem, ipsum.</h1>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!</p>
            </div>
        </div>
        <button data-aos="fade-up" data-aos-duration="1500"
            class="bg-black px-8 py-4 text-white font-bold text-center rounded-full mb-20">
            Learn More!
        </button>
    </div>

    {{-- Section 4 --}}
    <div class="grid w-full h-auto justify-center items-center xl:flex xl:flex-row bg-orange-500 xl:px-36 xl:p-24 sm:py-24">
            <div data-aos="fade-up" data-aos-duration="1500" class="w-full xl:w-1/2 mb-10 xl:mb-0 xl:mr-10 justify-center items-center">
                <div class="text-5xl text-white mb-10 font-bold">
                    Why Choose Us?
                </div>
        
                <div class="">
                    <img class="object-cover w-full h-[380px] xl:w-[550px] rounded-[20px]" src="images\why-choose-us.jpg" alt="">
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" class="w-full xl:w-1/2">
                <div class="text-4xl xl:text-6xl text-white mb-10 flex flex-wrap">
                    <div class="mr-10">
                        <span class="mb-3 flex tabular-nums text-4xl xl:text-5xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:50]'">
                            <span class="supports-[counter-set]:sr-only"></span>+
                        </span>
                        <div class="text-base text-white w-full max-w-[150px]">
                            Client
                        </div>
                    </div>
                    <div class="">
                        <span class="mb-3 flex tabular-nums text-4xl xl:text-5xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:75]'">
                            <span class="supports-[counter-set]:sr-only"></span>+
                        </span>
                        <div class="text-base text-white w-full max-w-[150px]">
                            Training and Certification
                        </div>
                    </div>
                    <div class="">
                        <span class="mb-3 flex tabular-nums text-4xl xl:text-5xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:1000]'">
                            <span class="supports-[counter-set]:sr-only"></span>+
                        </span>
                        <div class="text-base text-white w-full max-w-[200px]">
                            Alumni peserta pelatihan dan sertifikasi
                        </div>
                    </div>
                </div>
    
                <div class="grid text-orange-100">
                    <div class="flex mb-10 border-b border-white border-solid max-w-[500px]">
                        <div class="max-w-[235px] pr-2 mb-3">
                            <div class="font-bold mb-2 text-base xl:text-lg text-white">
                                Trusted Program
                            </div>
                            <p class="text-sm pb-2">
                                Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                            </p>
                        </div>
                        <div class="max-w-[235px]">
                            <div class="font-bold mb-2 text-base xl:text-lg text-white">
                                Trusted Program
                            </div>
                            <p class="text-sm pb-2">
                                Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                            </p>
                        </div>
                    </div>
    
                    <div class="flex border-b mb-5 border-white border-solid max-w-[500px]">
                        <div class="max-w-[235px] mb-3">
                            <div class="font-bold mb-2 text-base xl:text-lg text-white">
                                Trusted Program
                            </div>
                            <p class="text-sm pb-2">
                                Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                            </p>
                        </div>
                        <div class="max-w-[235px]">
                            <div class="font-bold mb-2 text-base xl:text-lg text-white">
                                Trusted Program
                            </div>
                            <p class="text-sm pb-2">
                                Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                            </p>
                        </div>
                    </div>
    
                    <a href="#">
                        <button class="bg-black px-8 py-4 text-white font-bold text-center rounded-full m-5 max-w-[200px]">
                            Learn More!
                        </button>
                    </a>
                </div>
            </div>
        
    </div>

    {{-- Section 5 --}}
    <div class="bg-white max-w-full grid xl:flex px-20 pt-20">
        <div data-aos="fade-up" data-aos-duration="1500" class="max-w-full xl:max-w-[480px] m-10 sm:mb-0">
            <div class="max-w-[580px] m-5 text-5xl text-black mb-10 font-bold">
                Our Program
            </div>

            <p class="text-lg leading-8 text-black max-w-[580px] mx-5">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries
            </p>
        </div>
        <div class="flex xl:grid">
            <div data-aos="fade-up" data-aos-duration="1500" class="grid grid-cols-2 gap-4 mb-16 pt-16 sm:mx-16">
                <div class="bg-orange-500 max-w-[400px] max-h-60 p-10 rounded-[20px]">
                    <h1 class="text-2xl font-bold text-black text-left mb-3">
                        Training
                    </h1>
                    <p class="text-sm">
                        Training untuk kalangan dunia pendidikan, perusahaan, instansi atau lembaga lainnya.
                    </p>
                    <a href="#">
                        <div class="text-black mt-5 font-bold text-base hover:text-blue-700">
                            Learn More
                        </div>
                    </a>
                </div>
        
                <div class="bg-orange-500 max-w-[400px] max-h-60 p-10 rounded-[20px]">
                    <h1 class="text-2xl font-bold text-black text-left mb-3">
                        Consulting
                    </h1>
                    <p class="text-sm">
                        Pemecahan masalah yang dihadapi dengan bantuan konsultan berpengalaman.
                    </p>
                    <a href="#">
                        <div class="text-black mt-5 font-bold text-base hover:text-blue-700">
                            Learn More
                        </div>
                    </a>
                </div>

                <div class="bg-orange-500 max-w-[400px] max-h-60 p-10 rounded-[20px]">
                    <h1 class="text-2xl font-bold text-black text-left mb-3">
                        Organizing
                    </h1>
                    <p class="text-sm">
                        Pengorganisasian atau perencanaan kegiatan untuk mencapai tujuan yang efisien.                    </p>
                    <a href="#">
                        <div class="text-black mt-5 font-bold text-base hover:text-blue-700">
                            Learn More
                        </div>
                    </a>
                </div>
        
                <div class="bg-orange-500 max-w-[400px] max-h-60 p-10 rounded-[20px]">
                    <h1 class="text-2xl font-bold text-black text-left mb-3">
                        Assesment Center
                    </h1>
                    <p class="text-sm">
                        Proses sistematik untuk menilai Kompetensi yang dipersyaratkan bagi keberhasilan dalam pekerjaan.                    </p>
                    <a href="#">
                        <div class="text-black mt-5 font-bold text-base hover:text-blue-700">
                            Learn More
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white mb-28 px-3">
        <div data-aos="fade-up" data-aos-duration="1500" class="flex justify-between items-center mx-32">
            <div class="max-w-[580px] my-5 text-5xl text-black mb-10 font-bold">
                Internship
            </div>
            <button class="bg-black px-6 py-2 max-h-12 text-white font-bold text-center rounded-full">
                See All
            </button>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" class="flex justify-center mx-24">
            <div class="h-auto w-1/2 sm:w-full grid items-center justify-center">
                <img id="foto" src="/images/internbg.png" alt="Logo Internship">
                <p id="teks" class="font-medium text-xl mt-5">
                    MSIB Batch 6 (Februari - Juni 2024)
                </p>
            </div>
            <div class="h-auto w-1/2 sm:w-full grid items-center justify-center">
                <img id="foto2" src="/images/internbg.png" alt="Logo Internship">
                <p id="teks2" class="font-medium text-xl mt-5">
                    MSIB Batch 6 (Februari - Juni 2024)
                </p>
            </div>
        </div>

        <script>
            // Ambil elemen gambar pertama dan kedua
            var foto1 = document.getElementById('foto');
            var foto2 = document.getElementById('foto2');

            // Atur event listener untuk kedua gambar
            foto1.onload = function() {
                // Ambil lebar gambar pertama
                var lebarFoto1 = foto1.offsetWidth;

                // Atur nilai max-width dari paragraf pertama
                document.getElementById('teks').style.maxWidth = lebarFoto1 + 'px';
            };

            foto2.onload = function() {
                // Ambil lebar gambar kedua
                var lebarFoto2 = foto2.offsetWidth;

                // Atur nilai max-width dari paragraf kedua
                document.getElementById('teks2').style.maxWidth = lebarFoto2 + 'px';
            };
        </script>
    </div>

    {{-- Section 6 --}}
    <div class="grid w-full justify-center items-center xl:flex xl:flex-row bg-orange-500 xl:px-36 xl:p-24 sm:py-24">
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-1/2">
            <div class="text-5xl text-black mb-10 font-bold">
                Frequently Asked Questions
            </div>

            <div class="bg-white mr-20 w-full xl:w-[550px] h-[331px] rounded-[20px] p-10 mb-10">
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-1/2">
            <div class="display grid text-orange-100">
                <div class="grid mb-10 max-w-[600px]">
                    <div class=" pr-2 mb-8">
                        <div class="font-bold mb-4 text-xl text-black ">
                            What types of electrical services does electema Provide for homes?
                        </div>
                        <p class="text-sm pb-5  border-b border-white border-solid">
                            Tincidunt viverra dui faucibus leo adipiscing id luctus facilisis. Urna turpis felis aliquet
                            feugiat nunc. Sagittis diam morbi aenean.
                        </p>

                    </div>

                    <div class=" pr-2 mb-8">
                        <div class="font-bold mb-2 text-xl text-black ">
                            What types of electrical services does electema Provide for homes?
                        </div>
                        <p class="text-sm pb-5  border-b border-white border-solid">
                            Tincidunt viverra dui faucibus leo adipiscing id luctus facilisis. Urna turpis felis aliquet
                            feugiat nunc. Sagittis diam morbi aenean.
                        </p>

                    </div>

                    <div class=" pr-2 mb-8">
                        <div class="font-bold mb-2 text-xl text-black ">
                            What types of electrical services does electema Provide for homes?
                        </div>
                        <p class="text-sm pb-5 border-b border-white border-solid">
                            Tincidunt viverra dui faucibus leo adipiscing id luctus facilisis. Urna turpis felis aliquet
                            feugiat nunc. Sagittis diam morbi aenean.
                        </p>

                    </div>

                    <div class=" pr-2 mb-8">
                        <div class="font-bold mb-2 text-xl text-black ">
                            What types of electrical services does electema Provide for homes?
                        </div>
                        <p class="text-sm pb-5  border-b border-white border-solid">
                            Tincidunt viverra dui faucibus leo adipiscing id luctus facilisis. Urna turpis felis aliquet
                            feugiat nunc. Sagittis diam morbi aenean.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 7 --}}
    <div class="bg-white max-w-full">
        <div class="flex flex-col py-10">
            <div data-aos="fade-up" data-aos-duration="1500" class="flex justify-between items-center my-10 mx-36">
                <div class="max-w-[580px] m-5 text-5xl text-black mb-10 font-bold">
                    Video
                </div>
                <button class="bg-black px-6 py-2 max-h-12 text-white font-bold text-center rounded-full">
                    Learn More!
                </button>
            </div>

            <div data-aos="fade-up" data-aos-duration="1500" class="flex justify-center flex-wrap sm:gap-5 md:gap-5 lg:gap-20 xl:gap-30 pb-20 px-20">
                {{-- <iframe class="w-full aspect-[4/3]" src="https://www.youtube.com/embed/kvUAwvpWHrA?si=zzuAfovcryTSfUMc"></iframe> --}}
                <div class=" sm:w-auto md:w-1/3 xl:w-1/4">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/kvUAwvpWHrA?si=zzuAfovcryTSfUMc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h1 class="text-lg font-bold leading-10 text-black text-left">Lorem, ipsum.</h1>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!</p>
                </div>
                <div class=" sm:w-auto md:w-1/3 xl:w-1/4">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/kvUAwvpWHrA?si=zzuAfovcryTSfUMc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h1 class="text-lg font-bold leading-10 text-black text-left">Lorem, ipsum.</h1>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!</p>
                </div>
                <div class=" sm:w-auto md:w-1/3 xl:w-1/4">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/kvUAwvpWHrA?si=zzuAfovcryTSfUMc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h1 class="text-lg font-bold leading-10 text-black text-left">Lorem, ipsum.</h1>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!</p>
                </div>
            </div>

        </div>
    </div>

    {{-- Section 8 --}}
    <div class="bg-orange-500 max-w-full">
        <div class="flex flex-col px-36 py-24">
            <div data-aos="fade-up" data-aos-duration="1500" class="flex justify-between items-center mb-10">
                <div class="text-5xl font-bold text-black max-w-[580px] m-5">
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
