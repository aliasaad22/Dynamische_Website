<x-admin-layout>

<div class="max-w-3xl mx-auto">

    {{-- HEADER --}}
    <div class="bg-white shadow rounded-2xl p-6 mb-6">
        <h1 class="text-2xl font-bold">FAQ vraag bewerken</h1>
        <p class="text-gray-500 text-sm">Pas de vraag en het antwoord aan</p>
    </div>

    {{-- FORM --}}
    <div class="bg-white shadow rounded-2xl p-6">

        <form action="{{ route('admin.faq-items.update', $faq_item) }}"
              method="POST"
              class="space-y-5">

            @csrf
            @method('PUT')

            {{-- CATEGORY --}}
            <div>
                <label class="text-sm font-medium">Categorie</label>

                <select name="faq_category_id"
                        class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $faq_item->faq_category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach

                </select>
            </div>

            {{-- QUESTION --}}
            <div>
                <label class="text-sm font-medium">Vraag</label>
                <input type="text"
                       name="question"
                       value="{{ old('question', $faq_item->question) }}"
                       class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">
            </div>

            {{-- ANSWER --}}
            <div>
                <label class="text-sm font-medium">Antwoord</label>
                <textarea name="answer"
                          rows="5"
                          class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">{{ old('answer', $faq_item->answer) }}</textarea>
            </div>

            {{-- BUTTONS --}}
            <div class="flex justify-between pt-4">

                <a href="{{ route('admin.faq-items.index') }}"
                   class="px-5 py-2 border rounded-lg text-gray-600 hover:bg-gray-100">
                    Annuleren
                </a>

                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">
                    Opslaan
                </button>

            </div>

        </form>

    </div>

</div>

</x-admin-layout>