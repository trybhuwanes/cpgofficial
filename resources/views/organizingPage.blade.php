@extends('layouts.app-layout')

@section('title', 'Organizing')

@section('content')

    {{-- SECTION 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="images\hero image.png">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-4xl text-black font-semibold">ORGANIZING</h1>
            </div>
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div class="mx-36 mt-10">
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
            <li>Family Gathering</li>
            <li>Event Organizer</li>
            <li>Publikasi</li>
            <li>Komunikasi Pelanggan</li>
            <li>Recruitment Agency</li>
            <li>Outbound</li>
        </ol>
    </div>


    {{-- SECTION 3 --}}
    <div class="mx-36 mb-5 my-10">
        <h5 class="mb-2 text-3xl font-bold tracking-tight text-black">Our Activity</h5>
    </div>
    <div class="grid grid-cols-3 gap-4 mx-36 mb-16">
        {{-- CARD FOTO 1 --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-36 object-cover w-full rounded-t-lg" src="images\service-excellence.jpg" alt="" />
            <div class="px-5 py-3">
                <h6 class="text-lg font-bold tracking-tight text-black dark:text-black">Noteworthy technology acquisitions
                </h6>
                <p class="text-sm text-black dark:text-black">Kamis, 28 Maret 2024</p>

            </div>
        </div>

        {{-- CARD FOTO 1 --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-36 object-cover w-full rounded-t-lg" src="images\service-excellence.jpg" alt="" />
            <div class="px-5 py-3">
                <h6 class="text-lg font-bold tracking-tight text-black dark:text-black">Noteworthy technology acquisitions
                </h6>
                <p class="text-sm text-black dark:text-black">Kamis, 28 Maret 2024</p>

            </div>
        </div>

        {{-- CARD FOTO 1 --}}
        <div class="h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
            <img class="block h-36 object-cover w-full rounded-t-lg" src="images\service-excellence.jpg" alt="" />
            <div class="px-5 py-3">
                <h6 class="text-lg font-bold tracking-tight text-black dark:text-black">Noteworthy technology acquisitions
                </h6>
                <p class="text-sm text-black dark:text-black">Kamis, 28 Maret 2024</p>

            </div>
        </div>
    </div>

@endsection
