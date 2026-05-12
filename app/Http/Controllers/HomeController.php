<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;
use App\Models\FaqItem;

class HomeController extends Controller
{
    public function index()
    {
       
        $featuredPlayers = Player::take(3)->get(); 
        $mainTeam = Team::first(1); 
        $faq = FaqItem::take(2)->get();

        return view('home.index', [
            'featuredPlayers' => $featuredPlayers,
            'mainTeam' => $mainTeam,
            'faq' => $faq,
        ]);
    }
}
