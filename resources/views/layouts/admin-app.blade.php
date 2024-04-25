<!-- resources/views/layout.blade.php -->
{{-- <!DOCTYPE html> --}}
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="font-body relative h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
    {{-- <header>
        <!-- Header Content -->
        @include('components.Navbar')
    </header> --}}
    @include('components.admin-sidebar')

    <div class="content">
        @yield('content')
    </div>

    {{-- <footer>
        @include('components.admin-footer')
    </footer> --}}
</body>
</html>
