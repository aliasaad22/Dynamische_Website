<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
class FaqCategoryController extends Controller
{
    public function index()
    {
        $categories = FaqCategory::query()->latest()->get();

        return view('admin.faq.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.faq.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        FaqCategory::create($validated);

        return redirect()
            ->route('admin.faq-categories.index')
            ->with('success', 'Categorie toegevoegd');
    }

    public function edit(FaqCategory $faqCategory)
    {
        return view('admin.faq.categories.edit', compact('faqCategory'));
    }

    public function update(Request $request, FaqCategory $faqCategory)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $faqCategory->update($validated);

        return redirect()
            ->route('admin.faq-categories.index')
            ->with('success', 'Categorie bijgewerkt');
    }

    
        public function destroy(FaqCategory $faqCategory)
    {
        FaqCategory::destroy($faqCategory->id);

        return redirect()
            ->route('admin.faq-categories.index')
            ->with('success', 'Categorie verwijderd');
    }
}

