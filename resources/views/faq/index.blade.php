<x-layout>

<div class="max-w-4xl mx-auto py-10">

    {{-- HEADER --}}
    <div class="bg-white shadow rounded-2xl p-6 mb-6">
        <h1 class="text-3xl font-bold">Veelgestelde vragen</h1>
        <p class="text-gray-500">Vind snel antwoorden op de meest gestelde vragen</p>
    </div>

    {{-- FAQ LIST --}}
    <div class="space-y-6">

        @foreach($categories as $category)

            <div class="bg-white shadow rounded-2xl p-6">

                {{-- CATEGORY TITLE --}}
                <h2 class="text-xl font-bold mb-4 border-b pb-2">
                    {{ $category->name }}
                </h2>

                @if($category->items->count() === 0)
                    <p class="text-gray-500">Geen vragen in deze categorie.</p>
                @else

                    <div class="space-y-4">

                        @foreach($category->items as $item)

                            <details class="border rounded-lg p-4 bg-gray-50 hover:bg-gray-100 transition">
                                
                                <summary class="cursor-pointer font-semibold">
                                    {{ $item->question }}
                                </summary>

                                <p class="mt-2 text-gray-700">
                                    {{ $item->answer }}
                                </p>

                            </details>

                        @endforeach

                    </div>

                @endif

            </div>

        @endforeach

    </div>

</div>

</x-layout>