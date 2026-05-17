<x-admin-layout>

<div class="max-w-4xl mx-auto">

    {{-- HEADER --}}
    <div class="bg-white shadow rounded-2xl p-6 mb-6 flex justify-between items-center">

        <div>
            <h1 class="text-2xl font-bold">FAQ Categorieën</h1>
            <p class="text-gray-500 text-sm">Beheer alle categorieën</p>
        </div>

        <a href="{{ route('admin.faq-categories.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
            + Nieuwe categorie
        </a>

    </div>

    {{-- LIST --}}
    <div class="bg-white shadow rounded-2xl overflow-hidden">

        @forelse($categories as $category)

            <div class="flex items-center justify-between p-4 border-b last:border-b-0 hover:bg-gray-50 transition">

                {{-- NAME --}}
                <div class="font-semibold">
                    {{ $category->name }}
                </div>

                {{-- ACTIONS --}}
                <div class="flex gap-2">

                    <a href="{{ route('admin.faq-categories.edit', $category) }}"
                       class="px-3 py-1 text-sm border rounded-lg hover:bg-gray-100">
                        Bewerk
                    </a>

                    <form action="{{ route('admin.faq-categories.destroy', $category) }}"
                          method="POST"
                          onsubmit="return confirm('Weet je zeker dat je deze categorie wil verwijderen?')">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="px-3 py-1 text-sm border border-red-300 text-red-600 rounded-lg hover:bg-red-50">
                            Verwijder
                        </button>

                    </form>

                </div>

            </div>

        @empty

            <div class="p-6 text-center text-gray-500">
                Geen categorieën gevonden
            </div>

        @endforelse

    </div>

</div>

</x-admin-layout>