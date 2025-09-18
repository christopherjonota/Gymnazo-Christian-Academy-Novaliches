<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>
<body>
    @include('partials.navbar') {{-- Reusable navbar --}}
    <main class="container">
        @yield('content') {{-- Page-specific content --}}
    </main> 
</body>
</html>