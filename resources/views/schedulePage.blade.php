<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'Schedule')

@section('content')

    {{-- Section 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-96 lg:h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('/images/hero image.png') }}">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-6xl lg:text-4xl text-black font-semibold">SCHEDULE</h1>
            </div>
        </div>
    </div>

    {{-- Section 2 --}}
    <div class="container w-full mx-auto justify-center py-28 lg:py-14 px-16 lg:px-28">
        <div class="header text-black text-center pb-10 text-6xl lg:text-4xl font-bold">
            <h1>Training</h1>
        </div>
        <div class="table w-full mx-auto pb-20">
            <table data-aos="lgfade-up" data-aos-duration="1500"
                class="w-full table-auto border-collapse border border-slate-500">
                <thead>
                    <tr>
                        <th class="w-1/12 text-center px-2 py-2 text-2xl lg:text-lg bg-orange-300 ">No</th>
                        <th class="w-6/12 text-center px-2 py-2 text-2xl lg:text-lg bg-orange-500">Nama Event</th>
                        <th class="w-2/12 text-center px-2 py-2 text-2xl lg:text-lg bg-orange-300">Tanggal</th>
                        <th class="w-2/12 text-center px-2 py-2 text-2xl lg:text-lg bg-orange-500">Lokasi</th>
                        <th class="w-1/12 text-center px-2 py-2 text-2xl lg:text-lg bg-orange-300">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $number = 1 ?>
                    @foreach ($training as $item)
                        <tr>
                            <td class="text-lg text-center px-2 border-collapse border border-slate-400">
                                {{ $number++ }}</td>
                            <td class="text-2xl lg:text-lg px-2 border-collapse border border-slate-400">{{ $item->title_training }}</td>
                            <td class="text-2xl lg:text-lg text-center px-2 border-collapse border border-slate-400">{{ $item->date_training->format('d F Y') }}</td>
                            <td class="text-2xl lg:text-lg text-center px-2 border-collapse border border-slate-400">{{ $item->location_training }}</td>
                            <td class="text-2xl lg:text-lg text-center px-2 border-collapse border border-slate-400 hover:text-blue-600"><a
                                    href="{{ route('training.detail', $item->slug_training) }}">Detail</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- TABEL ASSESMENT CENTER  --}}
        {{-- <div class="header text-black text-center pb-10 text-4xl font-bold">
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
        </div> --}}
    </div>

@endsection
