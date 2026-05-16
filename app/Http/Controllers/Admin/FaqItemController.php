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
        $validated = $request->validate([
            'faq_category_id' => ['required', 'exists:faq_categories,id'],
            'question' => ['required', 'string'],
            'answer' => ['required', 'string'],
        ]);

        FaqItem::create($validated);

        return redirect()
            ->route('admin.faq-items.index')
            ->with('success', 'FAQ vraag toegevoegd');
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
        return redirect()->route('admin.faq-items.index')
            ->with('success', 'FAQ vraag bijgewerkt');
      

        


    }

    public function destroy(FaqItem $faq_item)
    {
        $faq_item->delete($faq_item->id);
        return back()->with('success', 'Vraag verwijderd');
    }
}
