@extends('layouts.app-layout')

@section('title', 'Detail Event')

@section('content')

    {{-- SECTION 1 - JUDUL & FOTO --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 mb-5 my-10">
        <h3 class="mb-2 text-4xl font-bold tracking-tight text-black">Strategi Komunikasi Gen Z Menghadapi Dunia Kerja</h3>
    </div>

    <div class="flex flex-wrap mx-36">
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-2/3 sm:w-full ml-autoh-12 xl:pr-10 sm:pr-0">
            <img class="w-full aspect-square object-cover" src="images\dummyTrainingProgram.png" alt="Poster">
        </div>
        <div
        data-aos="fade-up" data-aos-duration="1500"  class="xl:w-1/3 sm:w-full h-[333px] p-5 bg-white rounded-[20px] shadow border border-neutral-500 flex-col justify-start items-start gap-5 inline-flex">
            <div class="justify-start items-start gap-2.5 inline-flex">
                <div
                    class="w-[90px] h-[90px] pl-3.5 pr-[15px] pt-[15px] pb-3.5 bg-white rounded-[20px] border border-black justify-center items-center flex">
                    <div class="w-[61px] h-[61px] relative flex-col justify-start items-start flex">
                        <img src="images\date.png" alt="Date">
                    </div>
                </div>
                <div class="py-[15px] flex-col justify-start items-start gap-[5px] inline-flex">
                    <div class="text-black text-xl font-medium leading-7">Selasa, 16 Januari 2024</div>
                    <div class="text-black text-xl font-medium leading-7">15.30 - 17.00 WIB</div>
                </div>
            </div>
            <div class="justify-start items-start gap-2.5 inline-flex">
                <div
                    class="w-[90px] h-[90px] pl-3.5 pr-[15px] pt-[15px] pb-3.5 bg-white rounded-[20px] border border-black justify-center items-center flex">
                    <div class="w-[61px] h-[61px] relative flex-col justify-start items-start flex">
                        <img src="images\location.png" alt="">
                    </div>
                </div>
                <div class="py-[15px] flex-col justify-start items-start gap-[5px] inline-flex">
                    <div class="text-black text-xl font-medium leading-7">Online via Zoom Meeting</div>
                </div>
            </div>
            <a href="#">
                <button type="button" class="text-white bg-black hover:bg-orange-500 focus:outline-none focus:ring-4 font-medium rounded-full text-base px-8 py-4 text-center">Register</button>
            </a>
        </div>
    </div>


    {{-- SECTION 2 - BODY --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 mb-5 my-10">
        <h5 class="mb-2 text-3xl font-bold tracking-tight text-black">Description</h5>
        <p class="text-justify mb-16 font-medium">
            Apakah Meeting Arrangement itu? Seperti apakah implementasi di dunia industri?
            Apa saja do’s & don’ts yang harus dipahami guru agar materi ini dapat disampaikan ke siswa sesuai kondisi praktiknya?<br><br>

            Ikuti workshop rutin Citra Prestasi Gemilang yang sangat produktif bersama 2 praktisi expert yaitu: <br>
            1. Sri Sudarwati <br>
            2. ⁠Yunita <br><br>

            Dalam workshop Meeting Arrangement Mengatur Pertemuan “Designing Great and Effective Meetings” yang akan diselenggarakan pada:
            🗓 Selasa, 16 Januari 2024 <br>
            🕰 15.30-17.30 (berakhir sebelum waktu sholat Maghrib) <br>
            📍Online Via Zoom💰Rp 50.000 <br><br>

            Daftarkan diri anda sekarang dan pastikan tidak terlambat, karena kapasitas terbatas hanya untuk 100 orang saja! Salam hebat luar biasa! <br><br>
        </p>
    </div>
@endsection
