<x-layout>

<div class="max-w-6xl mx-auto py-10">

    {{-- HEADER --}}
    <div class="bg-white shadow rounded-2xl p-6 mb-8">
        <h1 class="text-3xl font-bold">Spelers</h1>
        <p class="text-gray-500">Overzicht van alle teamspelers</p>
    </div>

    {{-- GRID --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @foreach($players as $player)

            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">

                {{-- IMAGE --}}
                @if($player->photo)
                    <img src="{{ $player->photo }}"
                         class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                        Geen foto
                    </div>
                @endif

                {{-- CONTENT --}}
                <div class="p-4">

                    <h2 class="text-lg font-bold">
                        {{ $player->name }}
                    </h2>

                    <p class="text-gray-600 text-sm mt-1">
                        #{{ $player->number }} • {{ $player->position }} • {{ $player->Team->name ?? 'Geen Team' }}
                    </p>
                

                </div>

            </div>

        @endforeach

    </div>

</div>

</x-layout>