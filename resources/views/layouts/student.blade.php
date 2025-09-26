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
        <div class="sidebar">
            <div class="home">
                <h2>Profile Summary</h2>
            </div>
            <div class="transaction">
                <h2>Class Schedule</h2>
            </div>
            <div class="transaction">
             <h2>Academic Overview</h2>
            </div>
        </div>
        <main>
            @yield('content')
        </main>
    </div>
    
</body>
</html>