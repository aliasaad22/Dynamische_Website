<x-admin-layout>

<div class="max-w-5xl mx-auto">

    {{-- HEADER --}}
    <div class="bg-white shadow rounded-2xl p-6 mb-6 flex justify-between items-center">

        <div>
            <h1 class="text-2xl font-bold">FAQ Vragen</h1>
            <p class="text-gray-500 text-sm">Beheer alle veelgestelde vragen</p>
        </div>

        <a href="{{ route('admin.faq-items.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
            + Nieuwe vraag
        </a>

    </div>

    {{-- LIST --}}
    <div class="bg-white shadow rounded-2xl overflow-hidden">

        @forelse($items as $item)

            <div class="p-5 border-b last:border-b-0 hover:bg-gray-50 transition">

                {{-- QUESTION --}}
                <div class="font-semibold text-lg">
                    {{ $item->question }}
                </div>

                {{-- CATEGORY --}}
                <div class="mt-1 text-sm text-gray-600">
                    Categorie:
                    <span class="font-medium text-gray-800">
                        {{ $item->category->name ?? 'Geen categorie ' }}
                    </span>
                </div>

                {{-- ANSWER PREVIEW (optional UX upgrade) --}}
                <p class="text-gray-500 text-sm mt-2">
                    {{ Str::limit($item->answer, 120) }}
                </p>

                {{-- ACTIONS --}}
                <div class="flex gap-2 mt-4">

                    <a href="{{ route('admin.faq-items.edit', $item) }}"
                       class="px-3 py-1 text-sm border rounded-lg hover:bg-gray-100">
                        Bewerk
                    </a>

                    <form action="{{ route('admin.faq-items.destroy', $item) }}"
                          method="POST"
                          onsubmit="return confirm('Weet je zeker dat je deze vraag wil verwijderen?')">

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
                Geen FAQ vragen gevonden
            </div>

        @endforelse

    </div>

</div>

</x-admin-layout>