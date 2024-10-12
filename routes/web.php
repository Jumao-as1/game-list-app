<?php

use App\Http\Controllers\GameController;

// Home route
Route::get('/', [GameController::class, 'index'])->name('home');

// Resource route for games (this includes index, create, store, edit, update, destroy)
Route::resource('games', GameController::class);

