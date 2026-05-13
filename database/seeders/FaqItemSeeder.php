<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faqitem;
class FaqItemSeeder extends Seeder
{
    public function run()
    {
        FaqItem::create([
            'question' => 'Hoe koop ik tickets?',
            'answer' => 'Tickets kan je kopen via onze officiële website.',
            'faq_category_id' => 1
        ]);

        FaqItem::create([
            'question' => 'Wanneer traint Real Madrid?',
            'answer' => 'Trainingen zijn meestal in de ochtend, maar kunnen variëren.',
            'faq_category_id' => 2
        ]);

        FaqItem::create([
            'question' => 'Waar is het stadion?',
            'answer' => 'Het Santiago Bernabéu stadion ligt in Madrid.',
            'faq_category_id' => 3
        ]);
    }
}
