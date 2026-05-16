<x-admin-layout>

    <h1 class="text-2xl font-bold mb-4">Categorie bewerken</h1>

    <form action="{{ route('admin.faq-categories.update', $faqCategory) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold">Naam</label>
            <input type="text" name="name" value="{{ old('name', $faqCategory->name) }}"
                   class="border p-2 w-full">
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Opslaan
        </button>
    </form>
<a href="{{ route('admin.faq-categories.index') }}">Annuleren</a>
</x-admin-layout>

