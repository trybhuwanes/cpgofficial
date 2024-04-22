{{-- <!-- resources/views/layout.blade.php -->
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="font-body">

    <form method="POST" action="{{ route('logout') }}" class="mx-auto">
        @csrf
        <button type="submit" class="bg-red-500 text-white font-bold py-2 px-4 rounded">Logout</button>
    </form>

</body>
</html> --}}
<!-- resources/views/welcome.blade.php -->
@extends('Admin Page.app-layoutAdmin')

@section('title', 'Dasboard Admin')

@section('content')

@endsection

