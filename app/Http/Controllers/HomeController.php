<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;
use App\Models\FaqItem;

class HomeController extends Controller
{
    public function index()
    {
       
        $featuredPlayers = Player::take(4)->get(); // 4 sterren spelers
        $mainTeam = Team::first(1); // Real Madrid A-team
        $faq = FaqItem::take(5)->get(); // 5 vragen

        return view('home.index', [
            'featuredPlayers' => $featuredPlayers,
            'mainTeam' => $mainTeam,
            'faq' => $faq,
        ]);
    }
}
