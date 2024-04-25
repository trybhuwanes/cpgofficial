<!-- resources/views/layout.blade.php -->
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="font-body">
    <header>
        <!-- Header Content -->
        @include('Admin Page.Navbar')

    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        {{-- @include('Admin Page.footer') --}}
    </footer>
</body>
</html>
