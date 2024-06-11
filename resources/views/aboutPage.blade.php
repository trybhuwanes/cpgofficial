<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'About Us')

@section('content')

    {{-- Section 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-96 lg:h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('/images/hero image.png') }}">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-6xl lg:text-4xl text-black font-semibold">ABOUT US</h1>
            </div>
        </div>
    </div>

    {{-- Section 2 GET TO KNOW ABOUT CPT --}}
    <div data-aos="lg:fade-up" data-aos-duration="1500" class="mx-16 my-24 lg:mx-36 lg:my-20">
        <div class="flex flex-wrap items-center justify-center bg-white p-10 border border-gray-300 rounded-xl shadow-2xl">
            <div class="text-5xl lg:text-4xl font-bold text-black w-full text-center mt-3 mb-5">
                Get to Know About CPG
            </div>
            <div data-aos="lg:fade-up" data-aos-duration="1500"
                class="lg:w-1/4 h-44 lg:h-64 justify-center items-center w-full sm:mt-5">
                <img class="h-44 lg:h-64 object-contain p-6 lg:p-8 w-full rounded-xl"
                    src="{{ asset('images/iconCPG.png') }}">
            </div>
            <div class="lg:w-3/4 w-full">
                <div data-aos="lg:fade-up" data-aos-duration="1500" class="max-w-full lg:pr-10 pr-0">
                    <p class="text-2xl lg:text-lg leading-normal lg:leading-7 text-black w-full lg:text-left text-center">
                        PT CITRA PRESTASI GEMILANG adalah perusahaan yang berfokus pada bidang Training, Consulting,
                        Organizing,
                        dan Assesment Center. Fokus utama perusahaan adalah melayani
                        kebutuhan seluruh
                        lapisan masyarakat dalam peningkatan kualitas sumber daya manusia dan pencapaian kompetensi
                        personal.
                        Perusahaan ini juga berdedikasi kepada masyarakat, bangsa dan negara Indonesia melalui rangkaian
                        kegiatan yang
                        memberikan nilai tambah, evidence, pencapaian kompetensi nasional, dan tanggung jawab perusahaan.
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3 statistic --}}
    <div class="bg-white max-w-full text-center"
        style="background-image: url('/images/tem-bg.jpg'); background-size: cover; background-position: center;">
        <div class="w-full h-fit shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="/images/tem-bg.jpg">
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>
            <div class="flex flex-col h-full items-center justify-center relative py-24 lg:py-10 px-16 lg:px-36">
                <div class="flex flex-col justify-center items-center">
                    <div
                        class="text-4xl xl:text-6xl text-white mb-10 mt-20 flex-wrap justify-center grid grid-cols-3 gap-x-10">
                        <div class="w-full max-w-[200px]">
                            <span
                                class="mb-3 flex tabular-nums text-7xl lg:text-6xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                                x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:100]'">
                                <span class="supports-[counter-set]:sr-only"></span>+
                            </span>
                            <div class="text-2xl lg:text-sm text-white text-left w-full max-w-[150px]">
                                Client
                            </div>
                        </div>
                        <div class="w-full max-w-[200px]">
                            <span
                                class="mb-3 flex tabular-nums text-7xl lg:text-6xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                                x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:100]'">
                                <span class="supports-[counter-set]:sr-only"></span>+
                            </span>
                            <div class="text-2xl lg:text-sm text-white text-left w-full max-w-[150px]">
                                Training and Certification
                            </div>
                        </div>
                        <div class="w-full max-w-[200px]">
                            <span
                                class="mb-3 flex tabular-nums text-7xl lg:text-6xl text-white transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]"
                                x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:3600]'">
                                <span class="supports-[counter-set]:sr-only"></span>+
                            </span>
                            <div class="text-2xl lg:text-sm text-white text-left w-full max-w-[200px]">
                                Alumni peserta pelatihan dan sertifikasi
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row text-orange-100 justify-center">
                    <div class="flex flex-row mb-10">
                        <div data-aos="lg:fade-up" data-aos-duration="1500" class="w-1/2 lg:max-w-[235px] lg:m-10">
                            <div class="font-bold mb-2 text-3xl text-left lg:text-xl text-white lg:max-h-[200px]">
                                Big Expansion
                            </div>
                            <p class="text-2xl lg:text-sm text-left pb-2">
                                Lebih dari satu dekade pengalaman, kami memiliki keterampilan mendalam untuk memberi solusi
                                yang efektif dan inovatif
                            </p>
                        </div>

                        <div data-aos="lg:fade-up" data-aos-duration="1500" class="w-1/2 lg:max-w-[235px] lg:m-10">
                            <div class="font-bold mb-2 text-3xl text-left lg:text-xl text-white">
                                Commitmen to Quality
                            </div>
                            <p class="text-2xl lg:text-sm text-left pb-2">
                                Kami menyediakan pendampingan yang berfokus pada pertumbuhan dan pengembangan yang
                                berkelanjutan
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-row mb-10">
                        <div data-aos="lg:fade-up" data-aos-duration="1500" class="w-1/2 lg:max-w-[235px] lg:m-10">
                            <div class="font-bold mb-2 text-3xl text-left lg:text-xl text-white">
                                Professional Team
                            </div>
                            <p class="text-2xl lg:text-sm text-left pb-2">
                                Tim kami terdiri dari ahli yang berpengalaman dan berkomitmen memberikan layanan berkualitas
                                kepada klien kami
                            </p>
                        </div>

                        <div data-aos="lg:fade-up" data-aos-duration="1500" class="w-1/2 lg:max-w-[235px] lg:m-10">
                            <div class="font-bold mb-2 text-3xl text-left lg:text-xl text-white">
                                After Service Experience
                            </div>
                            <p class="text-2xl lg:text-sm text-left pb-2">
                                Layanan free coaching setelah kegiatan training dan sertifikasi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- Section 4 VISION, MISSION, MOTTO --}}
    <div class="bg-white max-w-full px-16 py-28 lg:px-36 lg:py-20">
        <div data-aos="lg:fade-up" data-aos-duration="1500" class="text-6xl lg:text-5xl text-black mb-12 font-bold text-center">
            Our Vision, Mission, Motto
        </div>

        <div class="flex justify-center flex-col px-1 gap-5 lg:flex-row">
            <div data-aos="lg:fade-up" data-aos-duration="1500"
                class="xl:w-1/4 lg:w-1/3 sm:w-full p-8 bg-orange-500 border border-gray-200 rounded-xl lg:rounded-lg shadow justify-center items-center">
                <div class="place-items-center text-center">
                    <img src="/images/streamline_eye-optic.png" alt="Logo Client 1" class="h-24 lg:h-[70px] mx-auto mb-3">
                    <h1 class="text-5xl lg:text-2xl text-white mb-3">
                        Vision
                    </h1>
                    <p class="text-2xl lg:text-base mb-3 font-normal text-white text-center">Menjadi perusahaan pilihan utama mitra dalam
                        bidang pelatihan, konsultasi, pengorganisasian, dan pusat penilaian & sertifikasi di Indonesia
                    </p>
                </div>
            </div>

            <div data-aos="lg:fade-up" data-aos-duration="1500"
                class="xl:w-1/3 lg:w-1/2 sm:w-full p-8 bg-orange-500 border border-gray-200 rounded-xl lg:rounded-lg shadow justify-center items-center">
                <div class="place-items-center text-center">
                    <img src="images\mission.png" alt="Logo Client 1" class="h-24 lg:h-[70px] mx-auto mb-3">
                    <h1 class="text-5xl lg:text-2xl text-white mb-3">
                        Mission
                    </h1>
                    <p class="text-2xl lg:text-base mb-3 font-normal text-white text-center">Untuk membangun lembaga pelatihan, pembinaan, dan
                        pembelajaran yang bereputasi baik, berkemampuan, dan berkelanjutan yang didedikasikan untuk
                        memberikan pengalaman belajar yang tak tertandingi bagi klien dan peserta kami.
                        Melalui program PT. Citra Prestasi Gemilang, kami bertujuan untuk memberdayakan individu untuk
                        meningkatkan kontribusi mereka kepada keluarga, organisasi, dan masyarakat demi masa depan yang
                        lebih baik.</p>
                </div>
            </div>

            <div data-aos="lg:fade-up" data-aos-duration="1500"
                class="xl:w-1/4 lg:w-1/3 sm:w-full p-8 bg-orange-500 border border-gray-200 rounded-xl lg:rounded-lg shadow justify-center items-center">
                <div class="place-items-center text-center">
                    <img src="/images/Group.png" alt="Logo Client 1" class="h-24 lg:h-[70px] mx-auto mb-3">
                    <h1 class="text-5xl lg:text-2xl text-white mb-3">
                        Motto
                    </h1>
                    <p class="text-2xl lg:text-base mb-3 font-normal text-white text-center">
                        Melalui motto “Passion for Compassion" PT. Citra Prestasi Gemilang berkomitmen untuk mewujudkan visi
                        dan misi
                        perusahaan dengan fokus pada aksi nyata dan menumbuhkan rasa kasih sayang terhadap sesama manusia.
                    </p>
                </div>
            </div>
        </div>

    </div>

    {{-- Section 5 PRESIDENT DIRECTOR --}}
    <div class="w-full bg-black lg:px-36 lg:py-24 px-16 py-28">
        <div data-aos="lg:fade-up" data-aos-duration="1500" class="xl:w-1/2 sm:w-full items-start place-items-start">
            <div class="text-6xl lg:text-5xl text-white mb-10 font-bold">
                President Director
            </div>
        </div>
        <div class="w-full flex flex-col lg:flex-row">
            <figure data-aos="lg:fade-up" data-aos-duration="1500"
                class="aspect-square relative transition-all duration-300 lg:mr-20 mr-0">
                <img class="object-cover w-full aspect-square xl:w-[550px] rounded-xl" src="images\foto-bu-sri.jpg"
                    alt="Sri Sudawati - President Director">
                <figcaption class="absolute p-10 lg:p-4 text-3xl lg:text-lg text-white bottom-0 text-center bg-orange-600 rounded-b-xl">
                    <p>"Membangun bangunan mewah hanya butuh waktu 1-2 tahun, membangun MANUSIA butuh
                        waktu seumur hidup!"
                    </p>
                </figcaption>
            </figure>

            <div data-aos="lg:fade-up" data-aos-duration="1500"
                class="w-full lg:w-1/2 xl:mt-0 mt-10 justify-center items-center">
                <div class="display grid text-white">
                    <div class="grid w-full lg:max-w-[600px]">
                        <div class=" pr-2 mb-8">
                            <div class="font-bold mb-4 text-5xl lg:text-4xl text-white ">
                                Sri Sudarwati, M.M
                            </div>
                            <p class="text-2xl lg:text-sm pb-5">
                                CPG dibangun sebagai perjalanan spiritual seorang Sri Sudarwati.
                                Sri Sudarwati adalah seorang perempuan mandiri yang terlibat dalam beragam kegiatan dan
                                berpartisipasi aktif dalam berbagai organisasi.
                                Memiliki keahlian dalam berbagai keterampilan dan dapat dibuktikan melalui evidence
                                sertifikat BNSP.
                                Bercirikan kepribadian yang berpikiran terbuka, komunikatif, rendah hati, dan gesit.
                            </p>
                        </div>
                        <div class=" pr-2 mb-8">
                            <div class="font-bold mb-4 text-4xl lg:text-2xl text-white ">
                                Master Trainer
                            </div>
                            <p class="text-2xl lg:text-sm pb-5  border-b border-white border-solid">
                                Certified BNSP Master Trainer KKNI 6-Reg. SPS.2204 000618 2023
                            </p>

                        </div>

                        <div class=" pr-2 mb-8">
                            <div class="font-bold mb-2 text-4xl lg:text-2xl text-white ">
                                Asesor
                            </div>
                            <p class="text-2xl lg:text-sm pb-5  border-b border-white border-solid">
                                Certified BNSP Asesor - Reg. MET. 000.007180.2016 LSPASPSI Jakarta
                            </p>
                        </div>

                        <div class=" pr-2">
                            <div class="font-bold mb-2 text-4xl lg:text-2xl text-white ">
                                Coach
                            </div>
                            <p class="text-2xl lg:text-sm pb-5 border-b border-white border-solid">
                                Certified LIFE COACH, Indonesian Association Life Coach-DCN/LCP/2018/000083 <br>
                                Certified 3BNSP.O ESQ as a COACH-on going process certification <br>
                                IALC - Indonesian Association Life Coach <br>
                                ESQ - 3.0 Coach - Ary Ginanjar
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Section 6 STRUKTUR ORGANISASI --}}
    <div class="bg-white max-w-full my-28 lg:my-20 px-16 lg:px-36">
        <div class="flex flex-col">
            <div data-aos="lg:fade-up" data-aos-duration="1500" class="text-6xl lg:text-5xl text-black mb-12 font-bold">
                Struktur Organisasi
            </div>

            <div data-aos="lg:fade-up" data-aos-duration="1500"
                class="flex justify-center items-center mb-10 space-x-10">
                <img src="images\struktur-organisasi.png" alt="Logo Client 1" class="mx-auto">
            </div>
        </div>
    </div>

    {{-- Section 7 MEET OUR TEAM --}}
    <div class="bg-orange-500 max-w-full px-16 lg:px-36 py-28 lg:py-20">
        <div data-aos="lg:fade-up" data-aos-duration="1500" class="text-6xl lg:text-5xl text-white mb-12 font-bold">
            Meet Out Team
        </div>

        <div data-aos="lg:fade-up" data-aos-duration="1500"
            class="grid lg:grid-cols-5 grid-cols-2 gap-4">
            {{-- CARD FOTO 1 --}}
            <div
                class="lg:h-[380px] h-[440px] bg-white border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/team/bu sri.JPG') }}" alt="Sri Sudarwati - President Director CPG" />
                <div class="px-3 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">
                        Sri Sudarwati
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">President Director CPG</p>

                </div>
            </div>

            {{-- CARD FOTO 2 --}}
            <div
                class="lg:h-[380px] h-[440px] bg-white border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/team/evie.jpg') }}"
                    alt="Evie Dhiani - Praktisi Hospitality & Digital Marketing" />
                <div class="px-3 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">
                        Evie Dhiani
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Praktisi Hospitality & Digital Marketing</p>

                </div>
            </div>

            {{-- CARD FOTO 3 --}}
            <div
                class="lg:h-[380px] h-[440px] bg-white border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/team/dwi-ekasari.png') }}"
                    alt="Dwi Ekasari Harmadji - Finance & Management Consultant" />
                <div class="px-3 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">
                        Dwi Ekasari Harmadji
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Finance & Management Consultant</p>

                </div>
            </div>

            {{-- CARD FOTO 4 --}}
            <div
                class="lg:h-[380px] h-[440px] bg-white border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/team/yunita.jpg') }}" alt="Yunita - Secretary & Trainer" />
                <div class="px-3 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">
                        Yunita
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Secretary & Trainer</p>

                </div>
            </div>

            {{-- CARD FOTO 5 --}}
            <div
                class="lg:h-[380px] h-[440px] bg-white border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/team/ellisa.JPG') }}" alt="Ellisa Laili - Publication" />
                <div class="px-3 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">
                        Ellisa Laili
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Publication</p>

                </div>
            </div>

            {{-- CARD FOTO 6 --}}
            <div
                class="lg:h-[380px] h-[440px] bg-white border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/team/indra.jpg') }}" alt="Indra Febrianto - Self Development Trainer" />
                <div class="px-3 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">
                        Indra Febrianto
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Self Development Trainer</p>

                </div>
            </div>

            {{-- CARD FOTO 7 --}}
            <div
                class="lg:h-[380px] h-[440px] bg-white border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/team/siswanto.png') }}"
                    alt="Siswanto - Methodology, Welder, AC Trainer Specialized" />
                <div class="px-3 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">
                        Siswanto
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Methodology, Welder, AC Trainer Specialized
                    </p>

                </div>
            </div>

            {{-- CARD FOTO 8 --}}
            <div
                class="lg:h-[380px] h-[440px] bg-white border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/team/agus-heri.png') }}"
                    alt="Agus Heri Santoso - Human Capital & Development Trainer" />
                <div class="px-3 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">
                        Agus Heri Santoso
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Human Capital & Development Trainer</p>

                </div>
            </div>

            {{-- CARD FOTO 9 --}}
            <div
                class="lg:h-[380px] h-[440px] bg-white border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/team/bayu.jpg') }}" alt="Edy Bayu Sudarmanto - Branch Manager Jakarta" />
                <div class="px-3 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">
                        Edy Bayu Sudarmanto
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Branch Manager Jakarta</p>

                </div>
            </div>

            {{-- CARD FOTO 10 --}}
            <div
                class="lg:h-[380px] h-[440px] bg-white border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/team/riris.jpg') }}" alt="Riris R. R. - Branch Manager Jawa Tengah" />
                <div class="px-3 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">
                        Riris R. R.
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Branch Manager Jawa Tengah</p>

                </div>
            </div>

            {{-- CARD FOTO 11 --}}
            <div
                class="lg:h-[380px] h-[440px] bg-white border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/team/natasya.jpg') }}"
                    alt="Natasya Zahliyanti - Administration & Finance Departemen" />
                <div class="px-3 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">
                        Natasya Zahliyanti
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Administration & Finance Departemen </p>

                </div>
            </div>

            {{-- CARD FOTO 12 --}}
            <div
                class="lg:h-[380px] h-[440px] bg-white border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                <img class="block lg:h-72 h-80 object-cover w-full rounded-t-lg"
                    src="{{ asset('images/team/safira.jpg') }}" alt="Safira Dwi Jayanti - Director Marketing" />
                <div class="px-3 py-3">
                    <h6 class="text-3xl lg:text-lg font-bold tracking-tight text-black dark:text-black text-center">
                        Safira Dwi Jayanti
                    </h6>
                    <p class="text-2xl lg:text-sm text-black dark:text-black text-center">Director Marketing</p>

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
