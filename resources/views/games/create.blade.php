@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Add New Game</h1>

        <!-- Back Button -->
        <a href="{{ route('games.index') }}" class="btn btn-secondary mb-3">Back to Game List</a>

        <form action="{{ route('games.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" required>
            </div>
            <div class="form-group">
                <label for="release_year">Release Year</label>
                <input type="number" class="form-control" id="release_year" name="release_year" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Game</button>
        </form>
    </div>
@endsection
