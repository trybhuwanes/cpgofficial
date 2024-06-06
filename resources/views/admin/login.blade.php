@extends('layouts.app-layout')

@section('title', 'Login Page')

@section('content')

<div class="bg-orange-500 pb-20 pt-20 flex justify-center items-center">

        <div class="bg-white w-1/3 my-auto border-2 px-10 py-6 rounded-3xl shadow-2xl">
            <div class="flex justify-center items-center">
                <div class="bg-white p-4 inline-block rounded-lg">
                    <img src="{{ asset('images/iconCPG.png') }}" alt="Gemilang Icon" class="h-10 mx-auto ">
                </div>
                
            </div>
            <div>
                <h2 class="mt-5 text-center text-2xl font-bold">Login Admin</h2>
            </div>

            <form method="POST" action="{{ route('login') }}" class="mt-4">
                @csrf

            <div class="mb-4">
                <label for="email" class="block text-black font-bold">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-input mt-1 block w-full px-2 rounded-xl">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-black font-bold">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="form-input mt-1 block w-full px-2 rounded-xl">
            </div>

            <div class="flex justify-center">
                <button type="submit" class="mt-5 bg-black hover:bg-orange-500 text-white font-bold py-3 px-8 rounded-xl mx-auto">Login</button>
            </div>

        </form>

        </div>


</div>
@endsection
