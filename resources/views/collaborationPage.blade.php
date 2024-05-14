@extends('layouts.app-layout')

@section('title', 'Collaboration')

@section('content')

    {{-- SECTION 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="images\hero image.png">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-4xl text-black font-semibold">COLLABORATION</h1>
            </div>
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 my-20">
        <div class="flex flex-wrap items-center justify-center bg-white p-10 border border-gray-300 rounded-xl shadow-2xl">
            <div class="w-full">
                <div data-aos="fade-up" data-aos-duration="1500" class="max-w-full pr-10">
                    <p class="text-lg leading-7 text-black w-full mb-5 xl:text-left sm:text-center">
                        Bergabunglah dengan PT Citra Prestasi Gemilang dalam perjalanan kami untuk menciptakan perubahan yang positif! 
                        Kami selalu terbuka untuk berkolaborasi dengan individu, organisasi, dan mitra yang memiliki visi dan nilai yang sejalan dengan kami. 
                        Mari kita bergandengan tangan untuk menciptakan dampak yang berarti bagi masyarakat dan lingkungan. 
                        Ayo, bergabunglah bersama kami hari ini!</p>
                        <a href="https://wa.me/62811360215" target="_blank">
                            <button type="button"
                                class="text-white bg-black hover:bg-orange-500 focus:outline-none focus:ring-4 font-medium rounded-full text-base px-8 py-4 text-center">Hubungi Kami</button>
                        </a>
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION 3 --}}
    <div class="bg-white max-w-full h-auto pb-20 pt-10 px-36">
        <div data-aos="fade-up" data-aos-duration="1500" class="text-5xl text-black mb-12 font-bold text-center ">
            Our Client & Partnership
        </div>

        {{-- KEMENTERIAN --}}
        <div data-aos="fade-up" data-aos-duration="1500">
            <h5 class="mb-3 text-3xl font-bold tracking-tight text-black">KEMENTERIAN</h5>
            <hr class="h-px my-3 border-0 bg-gray-800">
            <div data-aos="fade-up" data-aos-duration="1500"
                class="flex flex-wrap gap-y-3 justify-center items-center h-fit mb-10 mt-8">
                <img class="h-20 mr-5" src="images\logo\kementerian\kemnaker.png" alt="Kemnaker" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\kementerian\kemdikbud.png" alt="Kemendikbud" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\kementerian\kemenparekraf.png" alt="kemenparekraf" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\kementerian\bappenas.png" alt="bappenas" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\kementerian\kominfo.png" alt="kominfo" class="mx-auto">
            </div>
        </div>

        {{-- BUMN --}}
        <div data-aos="fade-up" data-aos-duration="1500">
            <h5 class="mb-3 text-3xl font-bold tracking-tight text-black">BUMN</h5>
            <hr class="h-px my-3 border-0 bg-gray-800">
            <div data-aos="fade-up" data-aos-duration="1500"
                class="flex flex-wrap gap-y-3 justify-center items-center h-fit mb-10 mt-8">
                <img class="h-20 mr-5" src="images\logo\bumn\pegadaian.png" alt="Pegadaian" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\bumn\pt-pelindo.png" alt="PT Pelindo" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\bumn\pt-pal.png" alt="PT PAL Indonesia" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\bumn\pt-angkasa-pura.png" alt="PT Angkasa Pura" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\bumn\peruri.png" alt="Peruri" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\bumn\pt-phapros.jpg" alt="PT Phapros" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\bumn\PLN.png" alt="PLN" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\bumn\bareskrim.png" alt="Bareskrim" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\bumn\pt-bima.jpg" alt="PT BIMA" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\bumn\petrosida-gresik.jpg" alt="Petrosida Gresik" class="mx-auto">
            </div>
        </div>

        {{-- KOMUNITAS --}}
        <div data-aos="fade-up" data-aos-duration="1500">
            <h5 class="mb-3 text-3xl font-bold tracking-tight text-black">KOMUNITAS</h5>
            <hr class="h-px my-3 border-0 bg-gray-800">
            <div data-aos="fade-up" data-aos-duration="1500"
                class="flex flex-wrap gap-y-3 justify-center items-center h-fit mb-10 mt-8">
                <img class="h-20 mr-5" src="images\logo\komunitas\GNIK.jpg" alt="GNIK" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\komunitas\smk-hebat.jpg" alt="SMK-BISA-HEBAT" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\komunitas\PHRI.png" alt="PHRI" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\komunitas\pribadi.png" alt="PRIBADI" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\komunitas\GNFI.png" alt="GNFI" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\komunitas\ama-indonesia.jpg" alt="AMA-INDONESIA" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\komunitas\AIESEC.png" alt="AIESEC" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\komunitas\IASPRO.png" alt="IASPRO" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\komunitas\iwapi.jpg" alt="IWAPI" class="mx-auto">
            </div>
        </div>

        {{-- LSP --}}
        <div data-aos="fade-up" data-aos-duration="1500">
            <h5 class="mb-3 text-3xl font-bold tracking-tight text-black">LSP</h5>
            <hr class="h-px my-3 border-0 bg-gray-800">
            <div data-aos="fade-up" data-aos-duration="1500"
                class="flex flex-wrap gap-y-3 justify-center items-center h-fit mb-10 mt-8">
                <img class="h-20 mr-5" src="images\logo\lsp\msdm.jpg" alt="LSP MSDM" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\retail.png" alt="LSP Retail Indonesia" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\LSPPRI.jpg" alt="LSP PRI" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\lspapsi.png" alt="LSP APSI" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\TIK.jpg" alt="LSP TIK" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\ikn.jpg" alt="LSP IKN" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\trainer-nuswantoro.jpg" alt="LSP Trainer Nuswantoro" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\pelatinas.png" alt="LSP PELATINAS" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\pt-pal.jpg" alt="LSP PT PAL" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\perbankan.jpg" alt="LSP Perbankan" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\paras.jpg" alt="LSP PARAS" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\PARBALI.jpg" alt="LSP PARBALI" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\lsppm.png" alt="LSP PM" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\perpajakan.jpg" alt="LSP Perpajakan Indonesia" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\abi.jpg" alt="LSP ABI" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\fit.png" alt="LSP FIT" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\telematika.jpg" alt="LSP PT Telematika" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\cs-nusantara.png" alt="LSP Cleaning Service Nusantara" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\barista.png" alt="LSP Barista Indonesia" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\editor-penulis.png" alt="LSP Penulis & Editor Profesional" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\k3-nasional.png" alt="LSP K3 Nasional" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\pariwisata-diy.jpeg" alt="LSP Pariwisata DIY" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\lsp\mpro.jpg" alt="LSP MPRO" class="mx-auto">
            </div>
        </div>

        {{-- PERUSAHAAN/KORPORASI --}}
        <div data-aos="fade-up" data-aos-duration="1500">
            <h5 class="mb-3 text-3xl font-bold tracking-tight text-black">PERUSAHAAN/KORPORASI</h5>
            <hr class="h-px my-3 border-0 bg-gray-800">
            <div data-aos="fade-up" data-aos-duration="1500"
                class="flex flex-wrap gap-y-3 justify-center items-center h-fit mb-10 mt-8">
                <img class="h-20 mr-5" src="images\logo\perusahaan\arnotts.png" alt="ARNOTT'S" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\auto-2000.png" alt="Auto 2000 Toyota" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\bank-jatim.png" alt="Bank Jatim" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\hotel-pangeran.jpg" alt="Hotel Pangeran" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\bantex.png" alt="Bantex" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\BMJ.png" alt="BMJ" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\concord.png" alt="Concord" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\kalla.png" alt="KALLA" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\sonton.png" alt="Sonton" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\metindo.png" alt="PT Metindo Erasakti" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\LPKN.png" alt="LPKN Training Center" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\TEF.png" alt="TEF" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\TKRI.png" alt="PT Tokai Rika Indonesia" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\toyota.jpg" alt="Toyota" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\whizhotel.png" alt="Whiz Hotel" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\m-class.png" alt="PT M Class Industry" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perusahaan\vale.png" alt="Vale" class="mx-auto">
            </div>
        </div>

        {{-- PERGURUAN TINGGI  --}}
        <div data-aos="fade-up" data-aos-duration="1500">
            <h5 class="mb-3 text-3xl font-bold tracking-tight text-black">PERGURUAN TINGGI</h5>
            <hr class="h-px my-3 border-0 bg-gray-800">
            <div data-aos="fade-up" data-aos-duration="1500"
                class="flex flex-wrap gap-y-3 justify-center items-center h-fit mb-10 mt-8">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\ub.jpeg" alt="Universitas Brawijaya" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\vokasi-ub.jpeg" alt="Vokasi Universitas Brawijaya" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\um.webp" alt="Universitas Negeri Malang" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\unmer.jpg" alt="Universitas Merdeka Malang" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\polinema.png" alt="Politeknik Negeri Malang" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\ugm.jpeg" alt="Universitas Gajah Mada" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\politeknik-negeri-bali.jpg" alt="Politeknik Negeri Bali" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\politeknik-padang.png" alt="Politeknik Negeri Padang" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\politeknik-medan.jpeg" alt="Politeknik Negeri Medan" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\unej.png" alt="Universitas Jember" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\univ-tanjung.webp" alt="Universitas Tanjungpura Pontianak" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\univ-sumut.jpeg" alt="Universitas Sumatera Utara" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\uny.png" alt="Universitas Negeri Yogyakarta" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\unair.webp" alt="Universitas Airlangga" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\unnes.jpeg" alt="Universitas Negeri Semarang" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\unjambi.png" alt="Universitas Jambi" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\polibatam.png" alt="Polibatam" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\binus.png" alt="Binus University" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\undip.png" alt="Universitas Diponegoro" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\its.png" alt="Institut Teknologi Sepuluh Nopember" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\perguruan-tinggi\psikologi-umm.jpg" alt="Fakultas Psikologi UMM" class="mx-auto">
            </div>
        </div>

        {{-- SMK  --}}
        <div data-aos="fade-up" data-aos-duration="1500">
            <h5 class="mb-3 text-3xl font-bold tracking-tight text-black">SMK</h5>
            <hr class="h-px my-3 border-0 bg-gray-800">
            <div data-aos="fade-up" data-aos-duration="1500"
                class="flex flex-wrap gap-y-3 justify-center items-center h-fit mb-10 mt-8">
                <img class="h-20 mr-5" src="images\logo\smk\smk-qomarul.jpg" alt="SMK Qomarul Hidayah 2" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-muhammadiyah-1.jpg" alt="SMK Muhammadiyah 1 Trenggalek" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-islam-panggul.jpg" alt="SMK Islam Panggul" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-pgri-5.png" alt="SMK PGRI 5 Jember" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-wonoasri.png" alt="SMK Wonoasri" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-perstuan.jpg" alt="SMK Persatuan Karangan" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-maarif.jpg" alt="SMK 08 Maarif NU" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-pgri-4.png" alt="SMK PGRI 4 Pasuruan" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-tanggulangin.jpg" alt="SMK Maarif Tanggulangin" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-sunan-ampel.jpg" alt="SMK Sunan Ampel Kasembon" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-ihsanniat.jpg" alt="SMK Ihsanniat Jombang" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-prajekan.jpg" alt="SMK 1 Prajekan" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-pgri-pasuruan.jpg" alt="SMK PGRI 1 Pasuruan" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-pgri-6.jpg" alt="SMK PGRI 6 Malang" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-pgri-sumberpucung.jpg" alt="SMK PGRI Sumberpucung" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smkn-1-mlg.jpg" alt="SMKN 1 Malang" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-muhammadiyah-2.jpg" alt="SMK Muhammadiyah 2 Pagak" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-brawijaya.png" alt="SMK Brawijaya Kepung" class="mx-auto">
                <img class="h-20 mr-5" src="images\logo\smk\smk-kalipare.jpg" alt="SMK Islam Kalipare" class="mx-auto">
            </div>
        </div>
    </div>
@endsection