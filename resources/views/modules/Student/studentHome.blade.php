@extends('layouts.student')

@section('content')
    <h1>Hahahhahah</h1>
    <form action="{{ route('student.logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
@endsection