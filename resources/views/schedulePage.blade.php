<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'Schedule')

@section('content')

    {{-- Section 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="images\hero image.png">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-4xl text-black font-semibold">SCHEDULE</h1>
            </div>
        </div>
    </div>

    {{-- Section 2 --}}
    <div class="container w-full mx-auto justify-center pt-14 px-28">
        <div class="header text-black text-center pb-10 text-4xl font-bold">
            <h1>Training</h1>
        </div>
        <div class="table w-full mx-auto pb-20">
            <table data-aos="fade-up" data-aos-duration="1500"
                class="w-full table-auto border-collapse border border-slate-500">
                <thead>
                    <tr>
                        <th class="w-1/12 text-center px-2 py-2 text-lg bg-orange-300 ">No</th>
                        <th class="w-6/12 text-center px-2 py-2 text-lg bg-orange-500">Nama Event</th>
                        <th class="w-2/12 text-center px-2 py-2 text-lg bg-orange-300">Tanggal Mulai</th>
                        <th class="w-2/12 text-center px-2 py-2 text-lg bg-orange-500">Lokasi</th>
                        <th class="w-1/12 text-center px-2 py-2 text-lg bg-orange-300">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 7; $i++)
                        <tr>
                            <td class="text-lg text-center px-2 border-collapse border border-slate-400">
                                {{ $i }}</td>
                            <td class="text-lg px-2 border-collapse border border-slate-400">Workshop Meeting
                                Arrangement Mengatur Pertemuan</td>
                            <td class="text-lg text-center px-2 border-collapse border border-slate-400">16 Februari
                                2024</td>
                            <td class="text-lg text-center px-2 border-collapse border border-slate-400">Online</td>
                            <td class="text-lg text-center px-2 border-collapse border border-slate-400"><a
                                    href="#">Detail</a></td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        <div class="header text-black text-center pb-10 text-4xl font-bold">
            <h1>Assesment Center</h1>
        </div>
        <div class="table w-full mx-auto pb-20">
            <table data-aos="fade-up" data-aos-duration="1500"
                class="w-full table-auto border-collapse border border-slate-400">
                <thead>
                    <tr>
                        <th class="w-1/12 text-center px-2 py-2 text-lg bg-orange-300 ">No</th>
                        <th class="w-6/12 text-center px-2 py-2 text-lg bg-orange-500">Nama Event</th>
                        <th class="w-2/12 text-center px-2 py-2 text-lg bg-orange-300">Tanggal Mulai</th>
                        <th class="w-2/12 text-center px-2 py-2 text-lg bg-orange-500">Lokasi</th>
                        <th class="w-1/12 text-center px-2 py-2 text-lg bg-orange-300">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 5; $i++)
                        <tr>
                            <td class="text-lg text-center px-2 border-collapse border border-slate-400">
                                {{ $i }}</td>
                            <td class="text-lg px-2 border-collapse border border-slate-400">Workshop Meeting
                                Arrangement Mengatur Pertemuan</td>
                            <td class="text-lg text-center px-2 border-collapse border border-slate-400">16 Februari
                                2024</td>
                            <td class="text-lg text-center px-2 border-collapse border border-slate-400">Online</td>
                            <td class="text-lg text-center px-2 border-collapse border border-slate-400"><a
                                    href="#">Detail</a></td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

@endsection
