@extends('layouts.app')

@section('content')
    <h1>Daftar Course</h1>

    @foreach ($courses as $course)
        <div>
            <h2>{{ $course->title }}</h2>
            <p>{{ $course->description }}</p>
            <p>{{ $course->price }}</p>
            <img src="{{ asset('storage/' . $course->thumbnail) }}" width="200">

        </div>
    @endforeach

    {{ $courses->links() }}
@endsection
