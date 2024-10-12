@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Game List</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('games.create') }}" class="btn btn-primary mb-3">Add New Game</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Release Year</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($games as $game)
                    <tr>
                        <td>{{ $game->title }}</td>
                        <td>{{ $game->genre }}</td>
                        <td>{{ $game->release_year }}</td>
                        <td>
                            <a href="{{ route('games.edit', $game->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
