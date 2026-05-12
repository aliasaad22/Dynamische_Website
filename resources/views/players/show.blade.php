<x-layout>
    <div class="flex gap-10">
        <img src="{{ $player->photo }}" class="w-64 rounded-xl shadow">

        <div>
            <h1 class="text-4xl font-bold mb-4">{{ $player->name }}</h1>
            <p class="text-xl mb-2">Rugnummer: <strong>{{ $player->number }}</strong></p>
            <p class="text-xl mb-2">Positie: <strong>{{ $player->position }}</strong></p>
            <p class="text-xl">Team: <a href="/teams/{{ $player->team->id }}" class="text-blue-700">{{ $player->team->name }}</a></p>
        </div>
    </div>
</x-layout>
