<!-- resources/views/layout.blade.php -->
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body class="font-body">
    <header>
        <!-- Header Content -->
        @include('components.Navbar')
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        @include('components.footer')
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
