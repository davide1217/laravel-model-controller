@extends('layout.main')

@section('content')
    <section id="home">
        @foreach ($movies as $movie)
        <span>
            <div><strong>Title:</strong> {{$movie->title}}</div>
            <div><strong>Original title:</strong> {{$movie->original_title}}</div>
            <div><strong>Vote:</strong> {{$movie->vote}}</div>
        </span>
        @endforeach
    </section>
@endsection
