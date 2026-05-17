<x-layout>

<div class="max-w-6xl mx-auto py-10">

    {{-- HEADER --}}
    <div class="bg-white shadow rounded-2xl p-6 mb-8">
        <h1 class="text-3xl font-bold">Teams</h1>
        <p class="text-gray-500">Overzicht van alle teams</p>
    </div>

    {{-- GRID --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        @foreach($teams as $team)

            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">

                {{-- LOGO --}}
                @if($team->logo)
                    <div class="p-6 flex justify-center bg-gray-50">
                        <img src="{{ $team->logo }}"
                             class="h-24 object-contain">
                    </div>
                @else
                    <div class="h-24 flex items-center justify-center bg-gray-200 text-gray-500">
                        Geen logo
                    </div>
                @endif

                {{-- CONTENT --}}
                <div class="p-5">

                    <h2 class="text-xl font-bold">
                        {{ $team->name }}
                    </h2>

                    <p class="text-gray-600 text-sm mt-2">
                        {{ Str::limit($team->description, 100) }}
                    </p>

                </div>

            </div>

        @endforeach

    </div>

</div>

</x-layout>