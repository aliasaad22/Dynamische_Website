<?php

namespace App\Http\Controllers;

use App\Models\FaqItem;
use App\Models\FaqCategory;
class FaqController extends Controller
{
    public function index()
    {
        $categories = FaqCategory::with('items')->get();

        return view('faq.index', [
            'categories' => $categories
        ]);
    }
}

