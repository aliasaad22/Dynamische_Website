<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqCategory;

class FaqCategorySeeder extends Seeder
{
    public function run()
    {
        FaqCategory::create(['name' => 'Tickets']);
        FaqCategory::create(['name' => 'Training']);
        FaqCategory::create(['name' => 'Club']);
    }
}
