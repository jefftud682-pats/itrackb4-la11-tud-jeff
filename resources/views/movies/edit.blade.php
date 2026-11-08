
@extends('layouts.app')

@section('title', 'Edit Movie')

@section('content')

    <h2>Edit Movie</h2>

    <form method="POST" action="{{ route('movies.update', $movie) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title">Movie Title</label>

            <input
                type="text"
                name="title"
                id="title"
                class="form-control"
                value="{{ old('title', $movie->title) }}"
            >

            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="director">Director</label>

            <select name="director" id="director" class="form-control">
                <option value="">Select Director</option>
                @foreach ($directors as $name)
                    <option value="{{ $name }}" @selected(old('director', $movie->director) === $name)>
                        {{ $name }}
                    </option>
                @endforeach
            </select>

            @error('director')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="genre_id">Genre</label>

            <select name="genre_id" id="genre_id" class="form-control">
                <option value="">Select Genre</option>
                @foreach ($genres as $itemGenre)
                    <option value="{{ $itemGenre->id }}" @selected(old('genre_id', $movie->genre_id) == $itemGenre->id)>
                        {{ $itemGenre->name }}
                    </option>
                @endforeach
            </select>

            @error('genre_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="year">Year</label>

            <input
                type="number"
                name="year"
                id="year"
                class="form-control"
                value="{{ old('year', $movie->year) }}"
            >

            @error('year')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            Update Movie
        </button>

        <a href="{{ route('movies.index') }}" class="btn btn-secondary">
            Cancel
        </a>
    </form>

@endsection
