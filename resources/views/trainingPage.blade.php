<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'About Us')

@section('content')

        {{-- Section 1 --}}
        <div class="bg-orange-500 max-w-full">
            <div class="bg-orange-500 max-w-full">
                <div class="h-[330px] bg-cover bg-center flex justify-center items-center"
                    style="background-image: url('/images/tem-bg.jpg')">
                    <div class="text-4xl font-semibold text-black max-w-[580px] text-center">
                        TRANING PROGRAM
                    </div>
                </div>
            </div>
        </div>
        {{-- Section 2 --}}
        <div class="bg-white max-w-full p-20 pb-0">
            <select class="bg-orange-500 rounded-[20px] px-4 py-2 hover:bg-orange-500" value=>
                <option value="full">Full</option>
                <option value="category1">Category 1</option>
                <option value="category2">Category 2</option>
                <option value="category3">Category 3</option>
                <option value="category4">Category 4</option>
            </select>
        </div>


        {{-- section 3 --}}
        <div class="flex flex-wrap justify-center p-10">
            <div class="w-trainingEvent rounded-2xl mx-auto mb-20">
                <img src="/images/dummyTrainingProgram.png" alt="" class="max-w-trainingEvent rounded-2xl object-cover">
                <div class="p-5">
                    <h1 class="max-w-auto text-xl font-bold mb-5">Workshop Meeting Arrangement Mengatur Pertemuan</h1>

                    <h1 class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, nihil!</h1>
                </div>

                <button class="border border-black w-auto h-auto rounded-[20px] px-4 py-1 text-white bg-black hover:bg-orange-500 hover:text-white mt-5">
                    Detail
                </button>
            </div>
            <div class="w-trainingEvent rounded-2xl mx-auto mb-20">
                <img src="/images/dummyTrainingProgram.png" alt="" class="max-w-trainingEvent rounded-2xl object-cover">
                <div class="p-5">
                    <h1 class="max-w-auto text-xl font-bold mb-5">Workshop Meeting Arrangement Mengatur Pertemuan</h1>

                    <h1 class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, nihil!</h1>
                </div>

                <button class="border border-black w-auto h-auto rounded-[20px] px-4 py-1 text-white bg-black hover:bg-orange-500 hover:text-white mt-5">
                    Detail
                </button>
            </div>
            <div class="w-trainingEvent rounded-2xl mx-auto mb-20">
                <img src="/images/dummyTrainingProgram.png" alt="" class="max-w-trainingEvent rounded-2xl object-cover">
                <div class="p-5">
                    <h1 class="max-w-auto text-xl font-bold mb-5">Workshop Meeting Arrangement Mengatur Pertemuan</h1>

                    <h1 class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, nihil!</h1>
                </div>

                <button class="border border-black w-auto h-auto rounded-[20px] px-4 py-1 text-white bg-black hover:bg-orange-500 hover:text-white mt-5">
                    Detail
                </button>
            </div>
            <div class="w-trainingEvent rounded-2xl mx-auto mb-20">
                <img src="/images/dummyTrainingProgram.png" alt="" class="max-w-trainingEvent rounded-2xl object-cover">
                <div class="p-5">
                    <h1 class="max-w-auto text-xl font-bold mb-5">Workshop Meeting Arrangement Mengatur Pertemuan</h1>

                    <h1 class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, nihil!</h1>
                </div>

                <button class="border border-black w-auto h-auto rounded-[20px] px-4 py-1 text-white bg-black hover:bg-orange-500 hover:text-white mt-5">
                    Detail
                </button>
            </div>
            <div class="w-trainingEvent rounded-2xl mx-auto mb-20">
                <img src="/images/dummyTrainingProgram.png" alt="" class="max-w-trainingEvent rounded-2xl object-cover">
                <div class="p-5">
                    <h1 class="max-w-auto text-xl font-bold mb-5">Workshop Meeting Arrangement Mengatur Pertemuan</h1>

                    <h1 class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, nihil!</h1>
                </div>

                <button class="border border-black w-auto h-auto rounded-[20px] px-4 py-1 text-white bg-black hover:bg-orange-500 hover:text-white mt-5">
                    Detail
                </button>
            </div>
            <div class="w-trainingEvent rounded-2xl mx-auto mb-20">
                <img src="/images/dummyTrainingProgram.png" alt="" class="max-w-trainingEvent rounded-2xl object-cover">
                <div class="p-5">
                    <h1 class="max-w-auto text-xl font-bold mb-5">Workshop Meeting Arrangement Mengatur Pertemuan</h1>

                    <h1 class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, nihil!</h1>
                </div>

                <button class="border border-black w-auto h-auto rounded-[20px] px-4 py-1 text-white bg-black hover:bg-orange-500 hover:text-white mt-5">
                    Detail
                </button>
            </div>

        </div>


            <script>
                window.onload = function() {
                    // Ambil semua elemen div dengan kelas 'max-w-trainingEvent' yang ingin dihitung lebar maksimumnya
                    var divs = document.querySelectorAll('.max-w-trainingevent');

                    // Inisialisasikan variabel untuk menyimpan lebar maksimum
                    var maxWidth = 0;

                    // Iterasi melalui semua elemen div untuk menemukan lebar maksimum
                    divs.forEach(function(div) {
                        // Dapatkan lebar aktual dari setiap elemen div
                        var divWidth = div.offsetWidth;

                        // Bandingkan lebar aktual dengan lebar maksimum yang saat ini disimpan
                        if (divWidth > maxWidth) {
                            maxWidth = divWidth; // Jika lebar aktual lebih besar, atur sebagai lebar maksimum baru
                        }
                    });

                    // Ambil semua elemen div dengan kelas 'w-trainingEvent' untuk diubah lebar sesuai dengan maksimum yang ditemukan
                    var divsToChangeWidth = document.querySelectorAll('.w-trainingEvent');

                    // Atur lebar maksimum ke semua elemen div yang memiliki kelas 'w-trainingEvent'
                    divsToChangeWidth.forEach(function(div) {
                        div.style.width = maxWidth + 'px'; // Pastikan Anda menentukan satuan untuk lebar, dalam hal ini, px (piksel)
                    });
                }
            </script>









    @endsection
