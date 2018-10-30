<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamelist;

class GamelistController extends Controller
{
    public function index() {
        $allGames = Gamelist::all();

        return view('games/index')
            ->with('games', $allGames);
    }

    public function show($id) {
        $game = Gamelist::find($id);
        return view('games/show')
            ->with('game', $game);
    }

    public function create() {
        // Laat form view zien
        return view('games/create');
    }

    public function store(Request $request){
        // TODO: validate input

        // Stop data in de database
        $game = new Gamelist;

        $game->name = $request->name;
        $game->hrsplayed = $request->hrsplayed;
        $game->genre = $request->genre;
        $game->singleplayer = $request->singleplayer;
        $game->local_multiplayer = $request->local_multiplayer;
        $game->online_multiplayer = $request->online_multiplayer;
        $game->DLC = $request->DLC;
        $game->platform = $request->platform;
        $game->rating = $request->rating;

        $game->save();
    }
}