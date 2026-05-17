<x-admin-layout>

<div class="max-w-3xl mx-auto">

    {{-- HEADER --}}
    <div class="bg-white shadow rounded-2xl p-6 mb-6">
        <h1 class="text-2xl font-bold">Nieuwe FAQ vraag</h1>
        <p class="text-gray-500 text-sm">Voeg een nieuwe vraag toe aan de FAQ</p>
    </div>

    {{-- FORM --}}
    <div class="bg-white shadow rounded-2xl p-6">

        <form action="{{ route('admin.faq-items.store') }}"
              method="POST"
              class="space-y-5">

            @csrf

            {{-- CATEGORY --}}
            <div>
                <label class="text-sm font-medium">Categorie</label>

                <select name="faq_category_id"
                        class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">
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
                       value="{{ old('question') }}"
                       placeholder="Typ hier de vraag..."
                       class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">

                @error('question')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- ANSWER --}}
            <div>
                <label class="text-sm font-medium">Antwoord</label>
                <textarea name="answer"
                          rows="5"
                          placeholder="Typ hier het antwoord..."
                          class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">{{ old('answer') }}</textarea>

                @error('answer')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
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