@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>Welcome to the Game List App</h1>
        <a href="{{ route('games.index') }}" class="btn btn-primary mt-4">View Games</a>
    </div>
@endsection
