<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Gymnazo Christian Academy')</title>
</head>
<body>
    @include('partials.navbar') {{-- Reusable navbar --}}
    
    <main class="container mx-auto mt-10">
        @yield('content') {{-- Page-specific content --}}
    </main>

    @include('partials.footer') {{-- Optional reusable footer --}}
</body>
</html>