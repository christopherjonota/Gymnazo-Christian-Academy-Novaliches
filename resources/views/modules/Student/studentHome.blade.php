@extends('layouts.student')
@section('styles')
    @vite('resources/css/pages/student/home.css')
@endsection
@section('content')
<div class="content">
    <h2>Welcome Back, Christopher!</h2>
    <div class="home-content">
        <h1>Welcome to Student Portal</h1>
    </div>
    <div class="card-container">
        <div class="card">
            <h2>Enrolled Subjects</h2>
        </div>
        <div class="card">
            <h2>Attendance Rate</h2>
        </div>
        <div class="card"></div>
    </div>
    <div class="schedule">
        <h1>Today's Schedule</h1>
    </div>
    <div class="announcements">

    </div>
    <div class="access"></div>
</div>
@endsection