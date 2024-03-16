<!-- resources/views/layout.blade.php -->
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
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
</body>
</html>
