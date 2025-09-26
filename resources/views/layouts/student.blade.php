<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/pages/student/layout.css', 'resources/js/pages/student/layout.js'])
    @yield('styles')
</head>
<body>
    @include('modules.student.components.topbar')
    <div class="layout-container">
        @include('modules.student.partials.sidebard')
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>