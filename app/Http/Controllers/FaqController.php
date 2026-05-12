<?php

namespace App\Http\Controllers;

use App\Models\FaqItem;

class FaqController extends Controller
{
    public function index()
    {
        $faq = FaqItem::all();

        return view('faq.index', [
            'faq' => $faq
        ]);
    }
}
