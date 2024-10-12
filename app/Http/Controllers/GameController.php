<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    // Display the list of games
    public function index()
    {
        $games = Game::all(); // Fetch all games from the database
        return view('games.index', compact('games'));
    }

    // Show form to create a new game
    public function create()
    {
        return view('games.create');
    }

    // Store the new game in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'genre' => 'required|max:255',
            'release_year' => 'required|numeric',
        ]);

        Game::create($validatedData); // Create a new game using the validated data
        return redirect()->route('games.index')->with('success', 'Game added successfully.');
    }

    // Show form to edit an existing game
    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    // Update the existing game in the database
    public function update(Request $request, Game $game)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'genre' => 'required|max:255',
            'release_year' => 'required|numeric',
        ]);

        $game->update($validatedData); // Update the game with new data
        return redirect()->route('games.index')->with('success', 'Game updated successfully.');
    }

    // Delete a game
    public function destroy(Game $game)
    {
        $game->delete(); // Delete the game
        return redirect()->route('games.index')->with('success', 'Game deleted successfully.');
    }
}
