@extends('layouts.app')

@section('title', 'Welcome to Gymnazo Christian Academy')

@section('content')
    <h1 class="text-3xl font-bold text-center">Empowering Education Through Technology</h1>
    <p class="mt-4 text-center text-gray-600">Manage students, teachers, grades, and more—all in one place.</p>
    <a href="{{ route('login') }}" class="mt-6 block text-center text-blue-500 hover:underline">Login to your dashboard</a>
@endsection