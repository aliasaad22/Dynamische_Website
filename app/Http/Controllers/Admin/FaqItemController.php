<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqItem;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqItemController extends Controller
{
    public function index()
    {
        $items = FaqItem::with('category')->get();
        return view('admin.faq.items.index', compact('items'));
    }

    public function create()
    {
        $categories = FaqCategory::all();
        return view('admin.faq.items.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'faq_category_id' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]);

        FaqItem::create($request->all());

        return back()->with('success', 'Vraag toegevoegd');
    }

    public function edit(FaqItem $faq_item)
    {
        $categories = FaqCategory::all();
        return view('admin.faq.items.edit', compact('faq_item', 'categories'));
    }

    public function update(Request $request, FaqItem $faq_item)
    {
        $request->validate([
            'faq_category_id' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq_item->update($request->all());

        return back()->with('success', 'Vraag bijgewerkt');
    }

    public function destroy(FaqItem $faq_item)
    {
        $faq_item->delete();
        return back()->with('success', 'Vraag verwijderd');
    }
}
