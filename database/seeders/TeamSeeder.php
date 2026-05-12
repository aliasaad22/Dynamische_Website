<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    public function run()
    {
        Team::create([
            'name' => 'Real Madrid CF',
            'logo' => '/images/realmadrid.png',
            'description' => 'Het eerste team van Real Madrid, bekend als Los Blancos.',
        ]);
    }
}
