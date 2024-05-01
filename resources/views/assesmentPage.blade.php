@extends('layouts.app-layout')

@section('title', 'Assesment Center')

@section('content')

    {{-- SECTION 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="images\hero image.png">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-4xl text-black font-semibold">ASSESMENT CENTER</h1>
            </div>
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 mt-10">
        <p class="font-normal text-black text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum euismod pellentesque.
            Etiam interdum ex vel sapien porta rhoncus. Nam aliquet risus sapien, ut faucibus purus pharetra ac.
            Sed consectetur lorem in nibh blandit, eget tincidunt magna suscipit. Duis ac varius nulla.
            Phasellus elementum nisl vitae varius viverra. Etiam consequat odio dignissim convallis interdum.
            Quisque id volutpat lectus, non scelerisque nisl. Vestibulum quis efficitur est.
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam et
            rutrum mi, a iaculis lorem.
            Phasellus blandit eros a nunc vehicula, sit amet mollis felis condimentum <br>
        </p>
        <ol class="space-y-1 text-black list-decimal list-inside">
            <li>Human Capital</li>
            <ul class="pl-8 space-y-1 text-black list-disc list-inside ">
                <li>Supervisor</li>
                <li>General Manager</li>
                <li>Staff Recruitment</li>
            </ul>
            <li>Administrative Professional</li>
            <li>FIlling System (Document Control)</li>
            <li>Service Excellence</li>
            <li>Public Relation</li>
            <li>Public Speaking</li>
            <li>K3</li>
            <ul class="pl-8 space-y-1 text-black list-disc list-inside ">
                <li>K3 Umum</li>
                <li>Ahli K3</li>
                <li>K3 Pemadam Kebakaran</li>
                <li>K3 Ketinggian</li>
                <li>K3 Oil dan Gas</li>
            </ul>
        </ol>
    </div>


    {{-- SECTION 3 --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 mb-5 my-10">
        <h5 class="mb-2 text-3xl font-bold tracking-tight text-black">Skema</h5>

    </div>
    <div data-aos="fade-up" data-aos-duration="1500" class="grid grid-cols-3 gap-4 mx-36 mb-16">
        {{-- CARD BLOG SERVICE EXCELLENCE --}}
        <div
            class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100 hover:bg-orange-500">
            <a href="#">
                <img class="block h-36 object-cover w-full rounded-t-lg" src="images\service-excellence.jpg"
                    alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h6 class="mb-2 text-xl font-bold tracking-tight text-black dark:text-black">Service Excellence</h6>
                </a>

            </div>
        </div>

        {{-- CARD BLOG PUBLIC RELATION --}}
        <div
            class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100 hover:bg-orange-500">
            <a href="#">
                <img class="block h-36 object-cover w-full rounded-t-lg" src="images\public-relation.webp" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h6 class="mb-2 text-xl font-bold tracking-tight text-black dark:text-black">Public Relation</h6>
                </a>

            </div>
        </div>

        {{-- CARD BLOG HUMAN CAPITAL --}}
        <div
            class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100 hover:bg-orange-500">
            <a href="#">
                <img class="block h-36 object-cover w-full rounded-t-lg" src="images\human capital.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h6 class="mb-2 text-xl font-bold tracking-tight text-black dark:text-black">Human Capital</h6>
                </a>

            </div>
        </div>

        {{-- CARD BLOG FILLING SYSTEM --}}
        <div
            class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100 hover:bg-orange-500">
            <a href="#">
                <img class="block h-36 object-cover w-full rounded-t-lg" src="images\filing-system.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h6 class="mb-2 text-xl font-bold tracking-tight text-black dark:text-black">Filling System</h6>
                </a>

            </div>
        </div>

        {{-- CARD BLOG BODY SPA --}}
        <div
            class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100 hover:bg-orange-500">
            <a href="#">
                <img class="block h-36 object-cover w-full rounded-t-lg" src="images\body-spa.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h6 class="mb-2 text-xl font-bold tracking-tight text-black dark:text-black">Perawatan Spa & Terapi</h6>
                </a>

            </div>
        </div>

    </div>

@endsection
