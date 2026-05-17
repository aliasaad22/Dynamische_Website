<x-admin-layout>

<div class="max-w-2xl mx-auto">

    {{-- HEADER --}}
    <div class="bg-white shadow rounded-2xl p-6 mb-6">
        <h1 class="text-2xl font-bold">Categorie bewerken</h1>
        <p class="text-gray-500 text-sm">Pas de FAQ categorie aan</p>
    </div>

    {{-- FORM --}}
    <div class="bg-white shadow rounded-2xl p-6">

        <form action="{{ route('admin.faq-categories.update', $faqCategory) }}"
              method="POST"
              class="space-y-5">

            @csrf
            @method('PUT')

            {{-- NAME --}}
            <div>
                <label class="text-sm font-medium">Naam</label>
                <input type="text"
                       name="name"
                       value="{{ old('name', $faqCategory->name) }}"
                       class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">
            </div>

            {{-- BUTTONS --}}
            <div class="flex justify-between pt-4">

                <a href="{{ route('admin.faq-categories.index') }}"
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