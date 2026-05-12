<x-layout>

    
    <section class="mb-10 p-10 bg-gradient-to-r from-blue-900 to-blue-600 text-white rounded-xl">
        <h1 class="text-5xl font-bold mb-4">Real Madrid CF</h1>
        <p class="text-xl">Welkom op de officiële clubwebsite</p>
    </section>

    {{-- MAIN TEAM --}}
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4">Ons Eerste Team</h2>

        @if($mainTeam)
            <div class="p-6 border rounded-xl bg-white shadow">
                <h3 class="text-2xl font-bold">{{ $mainTeam->name }}</h3>
                <p class="mt-2">{{ $mainTeam->description }}</p>
                <a href="/teams/{{ $mainTeam->id }}" class="text-blue-700 font-semibold mt-3 inline-block">
                    Bekijk team →
                </a>
            </div>
        @else
            <p>Geen team gevonden.</p>
        @endif
    </section>

    
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4">Sterspelers</h2>

        <div class="grid grid-cols-4 gap-6">
            @foreach($featuredPlayers as $player)
                <div class="p-4 border rounded-xl bg-white shadow">
                    <img src="{{ $player->photo }}" class="w-full h-40 object-cover rounded mb-3">
                    <h3 class="text-xl font-bold">{{ $player->name }}</h3>
                    <p class="text-gray-600">#{{ $player->number }} — {{ $player->position }}</p>
                    <a href="/players/{{ $player->id }}" class="text-blue-700 font-semibold mt-3 inline-block">
                        Bekijk speler →
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4">Veelgestelde vragen</h2>

        <div class="space-y-4">
            @foreach($faq as $item)
                <div class="p-4 border rounded-xl bg-white shadow">
                    <h3 class="font-bold">{{ $item->question }}</h3>
                    <p class="text-gray-700 mt-1">{{ $item->answer }}</p>
                </div>
            @endforeach
        </div>

        <a href="/faq" class="text-blue-700 font-semibold mt-4 inline-block">
            Bekijk alle vragen →
        </a>
    </section>

</x-layout>
