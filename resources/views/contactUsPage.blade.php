@extends('layouts.app-layout')

@section('title', 'Contact Us')

@section('content')

    {{-- SECTION 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="images\hero image.png">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-4xl text-black font-semibold">CONTACT US</h1>
            </div>
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 mb-5 my-16">
        <div class="relative container m-auto px-6 bg-orange-600 rounded-lg p-5">
            <h5 class="mb-3 text-3xl font-bold tracking-tight text-black">How We Can Help You?</h5>
            <h5 class="mb-3 text-xl font-bold tracking-tight text-black">Tell us what you need</h5>

            <div class="grid grid-cols-2 gap-4">
                {{-- COL 1 - FORM CONTACT US --}}
                <div class="">
                    <form class="">
                        <div class="mb-5">

                            <label for="name" class="block mb-2 text-sm font-medium text-black">Nama</label>
                            <input type="text" id="name"
                                class="shadow-sm border text-gray-900 text-sm rounded-lg block w-full p-2 bg-gray placeholder-gray-400 focus:ring-black focus:border-black shadow-sm-light mb-3"
                                placeholder="Your Name" required />

                            <label for="email" class="block mb-2 text-sm font-medium text-black">Email</label>
                            <input type="email" id="email"
                                class="shadow-sm border text-gray-900 text-sm rounded-lg block w-full p-2 bg-gray placeholder-gray-400 focus:ring-black focus:border-black shadow-sm-light mb-3"
                                placeholder="yourname@gmail.com" required />

                            <label for="company" class="block mb-2 text-sm font-medium text-black">Company</label>
                            <input type="text" id="company"
                                class="shadow-sm border text-gray-900 text-sm rounded-lg block w-full p-2 bg-gray placeholder-gray-400 focus:ring-black focus:border-black shadow-sm-light mb-3"
                                placeholder="Company/University/Government" required />

                            <label for="phone" class="block mb-2 text-sm font-medium text-black">Phone</label>
                            <input type="text" id="phone"
                                class="shadow-sm border text-gray-900 text-sm rounded-lg block w-full p-2 bg-gray placeholder-gray-400 focus:ring-black focus:border-black shadow-sm-light mb-3"
                                placeholder="08xxxxxxxxxx" required />

                            <label for="subject" class="block mb-2 text-sm font-medium text-black">Subject</label>
                            <input type="text" id="subject"
                                class="shadow-sm border text-gray-900 text-sm rounded-lg block w-full p-2 bg-gray placeholder-gray-400 focus:ring-black focus:border-black shadow-sm-light mb-3"
                                placeholder="Subject message" required />

                            <label for="message" class="block mb-2 text-sm font-medium text-black">Message</label>
                            <textarea id="message" rows="4"
                                class="shadow-sm border text-gray-900 text-sm rounded-lg block w-full p-2 bg-gray placeholder-gray-400 focus:ring-black focus:border-black shadow-sm-light mb-3"
                                placeholder="Write down your message here ...."></textarea>
                        </div>


                        <button type="submit"
                            class="text-white bg-black font-medium rounded-full text-sm px-10 py-3 text-center hover:bg-orange-700">Send</button>
                    </form>
                </div>


                {{-- COL 2- COMPANY ADDRESS  --}}
                <div
                    class=" flex flex-col items-center h-2/5 bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100">
                    {{-- <img class="block h-36 object-cover w-full rounded-t-lg" src="images\service-excellence.jpg" alt="" /> --}}
                    <div class="px-5 py-5">
                        <h6 class="text-lg text-center font-bold tracking-tight text-black dark:text-black">Company Address
                            & Contact
                        </h6><br>
                        <h6 class="text-sm text-center font-bold tracking-tight text-black dark:text-black">Head Office
                        </h6>
                        <p class="text-sm text-black dark:text-black text-center">
                            Jl. Layur 1/12 Malang, Jawa Timur 65142 <br>
                            info@cpgofficial.com <br>
                            Ibu Sri Sudarwati <br></p> <br>
                        <button
                            class="mx-16 text-white bg-black font-medium rounded-full text-sm px-10 py-3 text-center hover:bg-orange-700">Whatsapp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION 3 --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 my-16">
        <h5 class="mb-8 text-3xl font-bold tracking-tight text-black">Find Our Creative Hub</h5>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.6256564946566!2d112.63323117484589!3d-7.9341077920898115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629eeeb9d8173%3A0x24f2eb544cb9e899!2sCitra%20Prestasi%20Gemilang!5e0!3m2!1sid!2sid!4v1711946643300!5m2!1sid!2sid"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


@endsection
