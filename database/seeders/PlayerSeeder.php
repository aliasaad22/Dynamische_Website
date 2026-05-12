<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    public function run()
    {
        Player::create([
            'name' => 'Vinícius Júnior',
            'photo' => '/images/vini.jpg',
            'number' => 7,
            'position' => 'Left Winger',
            'team_id' => 1,
        ]);

        Player::create([
            'name' => 'Jude Bellingham',
            'photo' => '/images/bellingham.jpg',
            'number' => 5,
            'position' => 'Midfielder',
            'team_id' => 1,
        ]);

        Player::create([
            'name' => 'Rodrygo',
            'photo' => '/images/rodrygo.jpg',
            'number' => 11,
            'position' => 'Right Winger',
            'team_id' => 1,
        ]);

        Player::create([
            'name' => 'Thibaut Courtois',
            'photo' => '/images/courtois.jpg',
            'number' => 1,
            'position' => 'Goalkeeper',
            'team_id' => 1,
        ]);
    }
}
