@extends('layouts.app')
@section('title', 'Welcome to Gymnazo Christian Academy')
@section('styles')
    @vite('resources/css/home.css')
    @vite('resources/js/pages/home.js')
@endsection
@section('content')
    <div class="banner-container">
        <img src="{{ asset('images/banner-images/banner-1.jpg') }}" class="banner-image active" alt="Banner 1">
        <img src="{{ asset('images/banner-images/banner-4.jpg') }}" class="banner-image" alt="Banner 2">
        <img src="{{ asset('images/banner-images/banner-5.jpg') }}" class="banner-image" alt="Banner 3">
        <img src="{{ asset('images/banner-images/banner-6.jpg') }}" class="banner-image" alt="Banner 2">
        <img src="{{ asset('images/banner-images/banner-7.jpg') }}" class="banner-image" alt="Banner 3">
    </div>
    <p>hehe</p>
    <h1 class="text-3xl font-bold text-center">Empowering Education Through Technology</h1>
    <p class="mt-4 text-center text-gray-600">Manage students, teachers, grades, and more—all in one place.</p>
@endsection