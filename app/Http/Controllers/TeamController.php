<?php

namespace App\Http\Controllers;

use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
    $teams = \App\Models\Team::all();

    return view('teams.index', [
        'teams' => $teams
    ]);
    }


    public function show($id)
    {
        // later invullen
    }
}
