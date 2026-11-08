@extends('layouts.app')

@section('title', $item['title'])

@section('content')

    <h2>{{ $item['title'] }}</h2>

    <div class="card">
        <div class="card-body">

            <p><strong>ID:</strong> {{ $item['id'] }}</p>
            <p><strong>Title:</strong> {{ $item['title'] }}</p>
            <p><strong>Director:</strong> {{ $item['director'] }}</p>
            <p><strong>Genre:</strong> {{ $item->genre->name }}</p>
            <p><strong>Year:</strong> {{ $item['year'] }}</p>

            <a class="btn btn-primary" href="{{ route('movies.index') }}">
                Back to Movie List
            </a>

        </div>
    </div>

@endsection