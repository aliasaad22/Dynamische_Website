<?php

namespace App\Http\Controllers;

use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
    $players = \App\Models\Player::all();

    return view('players.index', [
        'players' => $players
    ]);
    }

    public function show($id)
    {
        // later invullen
    }
}
