<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'Welcome')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    {{-- Section 1 --}}
    <div class="bg-orange-500 max-w-full text-center">
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
    <div class="bg-white max-w-full text-center py-10">
        <div class="flex flex-col justify-center items-center">
            <div class="text-4xl font-bold text-black max-w-[580px]">
                Our Clients
            </div>
            <br>
            <br>

            <div class="flex justify-center items-center h-full mb-10 space-x-10">
                <img src="/images/Logo Client 1.png" alt="Logo Client 1" class="mx-auto">
                <img src="/images/Logo Client 2.png" alt="Logo Client 2" class="mx-auto">
                <img src="/images/Logo Client 3.png" alt="Logo Client 3" class="mx-auto">
                <img src="/images/Logo Client 4.png" alt="Logo Client 4" class="mx-auto">
                <img src="/images/Logo Client 5.png" alt="Logo Client 5" class="mx-auto">
            </div>

        </div>
    </div>

    {{-- Section 3 --}}
    <div class="bg-white w-full text-center h-auto">
        <div class="flex flex-col justify-center items-center mb-10">
            <p class="text-lg leading-8 text-orange-400 m-5">
                Schedule
            </p>


            <div class="text-4xl font-bold text-black max-w-[580px] m-5">
                Upcoming Event
            </div>

            <p class="text-lg leading-8 text-black max-w-[580px] m-5">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
        </div>

        <div class="grid grid-cols-3 px-20 mb-10">
            <div class="grid justify-center items-center mx-10">
                <div class="flex justify-center items-center div-event bg-orange-500 rounded-[20px] p-10 text-center">
                    <img src="/images/Logo Client 1.png" alt="Logo Client 1" class="mx-auto">
                </div>
                <h1 class="text-lg font-bold leading-10 text-black text-center">Lorem, ipsum.</h1>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!</p>
            </div>

            <div class="grid justify-center items-center mx-10">
                <div class="flex justify-center items-center div-event bg-orange-500 rounded-[20px] p-10 text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, voluptatem hic. Maxime adipisci
                    praesentium quae quos sed nesciunt dicta porro magnam molestiae fuga, tenetur commodi atque magni
                    mollitia dolor quibusdam?
                </div>
                <h1 class="text-lg font-bold leading-10 text-black text-center">Lorem, ipsum.</h1>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!</p>
            </div>

            <div class="grid justify-center items-center mx-10">
                <div class="flex justify-center items-center div-event bg-orange-500 rounded-[20px] p-10 text-center">
                    Lorem ipsum dolor sit amet.
                </div>
                <h1 class="text-lg font-bold leading-10 text-black text-center">Lorem, ipsum.</h1>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!</p>
            </div>
        </div>

        <script>
            window.onload = function() {
                // Ambil semua elemen div dengan kelas 'div-event' yang ingin dihitung tinggi maksimumnya
                var divs = document.querySelectorAll('.div-event');

                // Inisialisasikan variabel untuk menyimpan tinggi maksimum
                var maxHeight = 0;

                // Iterasi melalui semua elemen div untuk menemukan tinggi maksimum
                divs.forEach(function(div) {
                    // Dapatkan tinggi aktual dari setiap elemen div
                    var divHeight = div.offsetHeight;

                    // Bandingkan tinggi aktual dengan tinggi maksimum yang saat ini disimpan
                    if (divHeight > maxHeight) {
                        maxHeight = divHeight; // Jika tinggi aktual lebih besar, atur sebagai tinggi maksimum baru
                    }
                });

                // Atur tinggi maksimum ke semua elemen div yang memiliki kelas 'div-event'
                divs.forEach(function(div) {
                    div.style.height = maxHeight + 'px';
                });
            }
        </script>



        <button class="bg-black px-8 py-4 text-white font-bold text-center rounded-full my-10">
            Learn More!
        </button>
    </div>

    {{-- Section 4 --}}
    <div class="grid w-full justify-center items-center xl:flex xl:flex-row bg-orange-500 p-10 xl:p-20">
        <div class="w-full xl:w-1/2 mb-10 xl:mb-0 xl:mr-10">
            <div class="text-4xl xl:text-6xl text-white mb-10">
                Why Choose Us?
            </div>

            <div class="bg-orange-400 w-full h-[331px] xl:w-[550px] rounded-[20px] p-10"></div>
        </div>

        <div class="w-full xl:w-1/2">
            <div class="text-4xl xl:text-6xl text-white mb-10 flex flex-wrap">
                <div class="mr-10 mb-5">
                    <div class="text-4xl xl:text-6xl text-white mb-2">
                        50+
                    </div>
                    <div class="text-sm text-white w-full max-w-[150px]">
                        Client
                    </div>
                </div>
                <div class="mr-10 mb-5">
                    <div class="text-4xl xl:text-6xl text-white mb-2">
                        50+
                    </div>
                    <div class="text-sm text-white w-full max-w-[150px]">
                        Training and Certification
                    </div>
                </div>
                <div class="mb-5">
                    <div class="text-4xl xl:text-6xl text-white mb-2">
                        1000+
                    </div>
                    <div class="text-sm text-white w-full max-w-[200px]">
                        Alumni peserta pelatihan dan sertifikasi
                    </div>
                </div>
            </div>

            <div class="grid text-orange-100">
                <div class="flex mb-10 border-b border-white border-solid max-w-[500px]">
                    <div class="max-w-[235px] pr-2">
                        <div class="font-bold mb-2 text-sm xl:text-base text-white">
                            Trusted Program
                        </div>
                        <p class="text-sm pb-2">
                            Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                        </p>
                    </div>
                    <div class="max-w-[235px]">
                        <div class="font-bold mb-2 text-sm xl:text-base text-white">
                            Trusted Program
                        </div>
                        <p class="text-sm pb-2">
                            Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                        </p>
                    </div>
                </div>

                <div class="flex mb-10 border-b border-white border-solid max-w-[500px]">
                    <div class="max-w-[235px]">
                        <div class="font-bold mb-2 text-sm xl:text-base text-white">
                            Trusted Program
                        </div>
                        <p class="text-sm pb-2">
                            Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                        </p>
                    </div>
                    <div class="max-w-[235px]">
                        <div class="font-bold mb-2 text-sm xl:text-base text-white">
                            Trusted Program
                        </div>
                        <p class="text-sm pb-2">
                            Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                        </p>
                    </div>
                </div>

                <button class="bg-black px-8 py-4 text-white font-bold text-center rounded-full m-10 max-w-[200px]">
                    Learn More!
                </button>
            </div>
        </div>
    </div>

    {{-- Section 5 --}}
    <div class="p-20">
        <div class="bg-white max-w-full grid xl:flex">
            <div class="max-w-full xl:max-w-[400px]">
                <div class="text-4xl font-bold text-black max-w-[580px] m-5">
                    Our Program
                </div>

                <p class="text-lg leading-8 text-black max-w-[580px] m-5">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries
                </p>
            </div>
            <div class="flex xl:grid">

                <div class="bg-orange-500 max-w-[400px] m-10 p-10 rounded-[20px]">
                    <h1 class="text-lg font-bold text-black text-left">
                        High Professionalism and Expertise
                    </h1>
                    <p>
                        Pretium phasellus erat condimentum arcu suspendisse nulla lorem. Velit id lobortis non faucibus
                        neque.
                    </p>
                    <a href="http://">
                        <div class="text-black mt-5 font-bold">
                            Learn More


                        </div>
                    </a>
                </div>

                <div class="bg-orange-500 max-w-[400px] m-10 p-10 rounded-[20px]">
                    <h1 class="text-lg font-bold text-black text-left">
                        High Professionalism and Expertise
                    </h1>
                    <p>
                        Pretium phasellus erat condimentum arcu suspendisse nulla lorem. Velit id lobortis non faucibus
                        neque.
                    </p>
                    <a href="http://">
                        <div class="text-black mt-5 font-bold">
                            Learn More


                        </div>
                    </a>
                </div>

            </div>

            <div class="flex xl:grid">

                <div class="bg-orange-500 max-w-[400px] m-10 p-10 rounded-[20px]">
                    <h1 class="text-lg font-bold text-black text-left">
                        High Professionalism and Expertise
                    </h1>
                    <p>
                        Pretium phasellus erat condimentum arcu suspendisse nulla lorem. Velit id lobortis non faucibus
                        neque.
                    </p>
                    <a href="http://">
                        <div class="text-black mt-5 font-bold">
                            Learn More


                        </div>
                    </a>
                </div>

                <div class="bg-orange-500 max-w-[400px] m-10 p-10 rounded-[20px]">
                    <h1 class="text-lg font-bold text-black text-left">
                        High Professionalism and Expertise
                    </h1>
                    <p>
                        Pretium phasellus erat condimentum arcu suspendisse nulla lorem. Velit id lobortis non faucibus
                        neque.
                    </p>
                    <a href="http://">
                        <div class="text-black mt-5 font-bold">
                            Learn More


                        </div>
                    </a>
                </div>

            </div>
        </div>
        <div>
            <div class="flex justify-between  py-20">
                <p class="text-4xl font-bold">Internship</p>
                <button class="bg-black px-6 py-2 max-h-12 text-white font-bold text-center rounded-full">
                    See All</button>
            </div>
            <div class=" flex justify-center">
                <div class="h-auto w-1/2 grid items-center justify-center">
                    <img id="foto" src="/images/internbg.png" alt="Logo Internship">
                    <p id="teks">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates laboriosam quam optio numquam
                        nemo
                        autem molestias doloribus debitis harum perferendis culpa adipisci dicta dignissimos, illum
                        recusandae
                        aperiam eos quas accusantium!
                    </p>
                </div>
                <div class="h-auto w-1/2 grid items-center justify-center">
                    <img id="foto2" src="/images/internbg.png" alt="Logo Internship">
                    <p id="teks2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates laboriosam quam optio numquam
                        nemo
                        autem molestias doloribus debitis harum perferendis culpa adipisci dicta dignissimos, illum
                        recusandae
                        aperiam eos quas accusantium!
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
            </script>
        </div>
    </div>
    </div>

    {{-- Section 6 --}}
    <div class="grid w-full justify-center items-center xl:flex xl:flex-row bg-orange-500 p-10 xl:p-20">
        <div class="xl:w-1/2">
            <div class="text-6xl text-white mb-20">

                Frequently Asked Questions
            </div>

            <div class="bg-white mr-20 w-full xl:w-[550px] h-[331px] rounded-[20px] p-10 mb-10">
            </div>
        </div>




        <div class="xl:w-1/2">
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
        </div>
    </div>

    {{-- Section 7 --}}
    <div class="bg-white max-w-full">
        <div class="flex flex-col p-20">
            <div class="flex justify-between items-center mb-10">
                <div class="text-4xl font-bold text-black max-w-[580px] m-5">
                    Video
                </div>
                <button class="bg-black px-6 py-2 max-h-12 text-white font-bold text-center rounded-full">
                    Learn More!
                </button>
            </div>

            <div class="flex justify-center flex-wrap gap-5 sm:gap-10 md:gap-20 lg:gap-30 xl:gap-40 px-1">
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="w-full h-[250px] bg-orange-500 flex justify-center items-center rounded-[20px] mb-5">1
                    </div>
                    <h1 class="text-lg font-bold leading-10 text-black text-left">Lorem, ipsum.</h1>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!</p>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="w-full h-[250px] bg-orange-500 flex justify-center items-center rounded-[20px] mb-5">2
                    </div>
                    <h1 class="text-lg font-bold leading-10 text-black text-left">Lorem, ipsum.</h1>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!</p>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="w-full h-[250px] bg-orange-500 flex justify-center items-center rounded-[20px] mb-5">3
                    </div>
                    <h1 class="text-lg font-bold leading-10 text-black text-left">Lorem, ipsum.</h1>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!</p>
                </div>
            </div>

        </div>
    </div>

    {{-- Section 8 --}}
    <div class="bg-orange-500 max-w-full">
        <div class="flex flex-col p-20">
            <div class="flex justify-between items-center mb-10">
                <div class="text-4xl font-bold text-black max-w-[580px] m-5">
                    What They Say About Our Program
                </div>
                <button class="bg-black px-6 py-2 max-h-12 text-white font-bold text-center rounded-full">
                    See All
                </button>
            </div>

            <div class="flex justify-center flex-wrap gap-x-5 sm:gap-x-10 md:gap-x-20 lg:gap-x-30 xl:gap-x-40 px-1">
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="w-full h-[327] bg-white grid rounded-[20px] mb-5 p-7">
                        <div class="flex justify-start items-end mb-5">
                            <div class="bg-orange-300 w-[70px] h-[70px] rounded mr-2">
                                Lorem, ipsum.
                            </div>

                            <div class="">
                                4.5/5

                            </div>
                        </div>

                        <div>
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Faulty Wiring in My Kitchen.
                            </h1>
                            <p class="mb-5">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, corporis?
                            </p>

                            <p>
                                Lorem, ipsum.
                            </p>
                        </div>

                    </div>

                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="w-full h-[327] bg-white grid rounded-[20px] mb-5 p-7">
                        <div class="flex justify-start items-end mb-5">
                            <div class="bg-orange-300 w-[70px] h-[70px] rounded mr-2">
                                Lorem, ipsum.
                            </div>

                            <div class="">
                                4.5/5

                            </div>
                        </div>

                        <div>
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Faulty Wiring in My Kitchen.
                            </h1>
                            <p class="mb-5">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, corporis?
                            </p>

                            <p>
                                Lorem, ipsum.
                            </p>
                        </div>

                    </div>

                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="w-full h-[327] bg-white grid rounded-[20px] mb-5 p-7">
                        <div class="flex justify-start items-end mb-5">
                            <div class="bg-orange-300 w-[70px] h-[70px] rounded mr-2">
                                Lorem, ipsum.
                            </div>

                            <div class="">
                                4.5/5

                            </div>
                        </div>

                        <div>
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Faulty Wiring in My Kitchen.
                            </h1>
                            <p class="mb-5">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, corporis?
                            </p>

                            <p>
                                Lorem, ipsum.
                            </p>
                        </div>

                    </div>

                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="w-full h-[327] bg-white grid rounded-[20px] mb-5 p-7">
                        <div class="flex justify-start items-end mb-5">
                            <div class="bg-orange-300 w-[70px] h-[70px] rounded mr-2">
                                Lorem, ipsum.
                            </div>

                            <div class="">
                                4.5/5

                            </div>
                        </div>

                        <div>
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Faulty Wiring in My Kitchen.
                            </h1>
                            <p class="mb-5">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, corporis?
                            </p>

                            <p>
                                Lorem, ipsum.
                            </p>
                        </div>

                    </div>

                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="w-full h-[327] bg-white grid rounded-[20px] mb-5 p-7">
                        <div class="flex justify-start items-end mb-5">
                            <div class="bg-orange-300 w-[70px] h-[70px] rounded mr-2">
                                Lorem, ipsum.
                            </div>

                            <div class="">
                                4.5/5

                            </div>
                        </div>

                        <div>
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Faulty Wiring in My Kitchen.
                            </h1>
                            <p class="mb-5">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, corporis?
                            </p>

                            <p>
                                Lorem, ipsum.
                            </p>
                        </div>

                    </div>

                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-10">
                    <div class="w-full h-[327] bg-white grid rounded-[20px] mb-5 p-7">
                        <div class="flex justify-start items-end mb-5">
                            <div class="bg-orange-300 w-[70px] h-[70px] rounded mr-2">
                                Lorem, ipsum.
                            </div>

                            <div class="">
                                4.5/5

                            </div>
                        </div>

                        <div>
                            <h1 class="mb-3 text-orange-500 font-semibold">
                                Faulty Wiring in My Kitchen.
                            </h1>
                            <p class="mb-5">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, corporis?
                            </p>

                            <p>
                                Lorem, ipsum.
                            </p>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
