<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'Welcome')

@section('content')
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
    <div class="bg-white max-w-full text-center">
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
                    <div class="w-48 h-64 bg-orange-500 flex justify-center items-center rounded-[20px]">1</div>
                    <h1 class="text-lg font-bold leading-10 text-black text-left">Lorem, ipsum.</h1>
                    <p class="text-left max-w-[180]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!
                    </p>
                </div>

                <div>
                    <div class="w-48 h-64 bg-orange-500 flex justify-center items-center rounded-[20px]">2</div>
                    <h1 class="text-lg font-bold leading-10 text-black text-left">Lorem, ipsum.</h1>
                    <p class="text-left max-w-[180]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quia!
                    </p>
                </div>

                <div>
                    <div class="w-48 h-64 bg-orange-500 flex justify-center items-center rounded-[20px]">3</div>
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
    <div class="flex flex-cols-2 bg-orange-500 p-20">
        <div class="w-1/2">
            <div class="text-6xl text-white mb-20">
                Why Choose Us?
            </div>

            <div class="bg-orange-400 mr-20 w-[550px] h-[331px] rounded-[20px] p-10">
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
            <div class="display grid text-orange-100">
                <div class="flex mb-10 border-b border-white border-solid max-w-[500px]">

                    <div class="max-w-[235px] pr-2">
                        <div class="font-bold mb-2 text-3sm text-white ">
                            Trusted Program
                        </div>
                        <p class="text-sm pb-2  max-w-[235px]">
                            Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                        </p>

                    </div>

                    <div class="max-w-[235px]">
                        <div class="font-bold mb-2 text-3sm text-white">
                            Trusted Program
                        </div>
                        <p class="text-sm pb-2  max-w-[235px]">
                            Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                        </p>

                    </div>


                </div>

                <div class="flex mb-10 border-b border-white border-solid max-w-[500px]">

                    <div class="max-w-[235px]">
                        <div class="font-bold mb-2 text-3sm text-white">
                            Trusted Program
                        </div>
                        <p class="text-sm pb-2  max-w-[235px]">
                            Adipiscing turpis sed faucibus magna at sit tincidunt. Non.
                        </p>

                    </div>

                    <div class="max-w-[235px]">
                        <div class="font-bold mb-2 text-3sm text-white">
                            Trusted Program
                        </div>
                        <p class="text-sm pb-2  max-w-[235px]">
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
    <div class="bg-white max-w-full flex p-20">
        <div class="max-w-[400px] m-10">
            <div class="text-4xl font-bold text-black max-w-[580px] m-5">
                Our Program
            </div>

            <p class="text-lg leading-8 text-black max-w-[580px] m-5">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries
            </p>
        </div>
        <div class="grid">

            <div class="bg-orange-500 max-w-[400px] m-10 p-10 rounded-[20px]">
                <h1 class="text-lg font-bold text-black text-left">
                    High Professionalism and Expertise
                </h1>
                <p>
                    Pretium phasellus erat condimentum arcu suspendisse nulla lorem. Velit id lobortis non faucibus neque.
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
                    Pretium phasellus erat condimentum arcu suspendisse nulla lorem. Velit id lobortis non faucibus neque.
                </p>
                <a href="http://">
                    <div class="text-black mt-5 font-bold">
                        Learn More


                    </div>
                </a>
            </div>

        </div>

        <div class="grid">

            <div class="bg-orange-500 max-w-[400px] m-10 p-10 rounded-[20px]">
                <h1 class="text-lg font-bold text-black text-left">
                    High Professionalism and Expertise
                </h1>
                <p>
                    Pretium phasellus erat condimentum arcu suspendisse nulla lorem. Velit id lobortis non faucibus neque.
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
                    Pretium phasellus erat condimentum arcu suspendisse nulla lorem. Velit id lobortis non faucibus neque.
                </p>
                <a href="http://">
                    <div class="text-black mt-5 font-bold">
                        Learn More


                    </div>
                </a>
            </div>

        </div>
    </div>

    {{-- Section 6 --}}
    <div class="flex flex-cols-2 bg-orange-500 p-20">
        <div class="w-1/2">
            <div class="text-6xl text-white mb-20">

                Frequently Asked Questions
            </div>

            <div class="bg-white mr-20 w-[550px] h-[331px] rounded-[20px] p-10">
            </div>
        </div>




        <div class="w-1/2">
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
