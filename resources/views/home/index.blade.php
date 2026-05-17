<x-layout>

<div class="max-w-6xl mx-auto py-10 space-y-12">

    {{-- HERO --}}
    <section class="text-center bg-white shadow rounded-2xl p-10">
        <h1 class="text-5xl font-bold mb-4">Real Madrid CF</h1>
        <p class="text-xl text-gray-600">Welkom op de officiële clubwebsite</p>

        <div class="mt-6">
            <a href="/teams"
               class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">
                Bekijk teams
            </a>
        </div>
    </section>

    {{-- MAIN TEAM --}}
    <section>

        <h2 class="text-3xl font-bold mb-6">Ons Eerste Team</h2>

        @if($mainTeam)
            <div class="bg-white shadow rounded-2xl p-6 hover:shadow-lg transition">

                <h3 class="text-2xl font-bold">
                    {{ $mainTeam->name }}
                </h3>

                <p class="text-gray-600 mt-2">
                    {{ $mainTeam->description }}
                </p>

                <a href="/teams/{{ $mainTeam->id }}"
                   class="text-blue-600 font-semibold mt-4 inline-block">
                    Bekijk team →
                </a>

            </div>
        @else
            <p class="text-gray-500">Geen team gevonden.</p>
        @endif

    </section>

    {{-- STERSPELERS --}}
    <section>

        <h2 class="text-3xl font-bold mb-6">Sterspelers</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

            @foreach($featuredPlayers as $player)

                <div class="bg-white shadow rounded-2xl overflow-hidden hover:shadow-lg transition">

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

                        <h3 class="text-lg font-bold">
                            {{ $player->name }}
                        </h3>

                        <p class="text-gray-600 text-sm mt-1">
                            #{{ $player->number }} — {{ $player->position }}
                        </p>

                        <a href="/players/{{ $player->id }}"
                           class="text-blue-600 font-semibold mt-3 inline-block">
                            Bekijk speler →
                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    </section>

    {{-- FAQ --}}
    <section>

        <h2 class="text-3xl font-bold mb-6">Veelgestelde vragen</h2>

        <div class="space-y-4">

            @foreach($faq as $item)

                <div class="bg-white shadow rounded-2xl p-5 hover:shadow-md transition">

                    <h3 class="font-bold">
                        {{ $item->question }}
                    </h3>

                    <p class="text-gray-600 mt-2">
                        {{ $item->answer }}
                    </p>

                </div>

            @endforeach

        </div>

        <a href="/faq"
           class="text-blue-600 font-semibold mt-6 inline-block">
            Bekijk alle vragen →
        </a>

    </section>

</div>

</x-layout>