@extends('layouts.app-layout')

@section('title', 'Login Page')

@section('content')

<div class="flex justify-center items-center">

        <div class="bg-orange-500 w-1/3 my-auto border-2 p-4 rounded-3xl ">
            <div class="flex justify-center items-center">
                <div class="bg-white p-4 inline-block rounded-lg">
                    <img src="{{ asset('images/iconCPG.png') }}" alt="Gemilang Icon" class="h-14 mx-auto ">
                </div>
            </div>

            <form method="POST" action="{{ route('login') }}" class="mt-4">
                @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-input mt-1 block w-full px-2">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="form-input mt-1 block w-full px-2">
            </div>

            <div class="flex justify-center">
                <a href="/" class="block bg-blue-500 text-white font-bold py-2 px-4 rounded mx-auto">Back</a>
                <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded mx-auto">Login</button>

            </div>

        </form>

        </div>


</div>
@endsection
