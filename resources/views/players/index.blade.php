<x-layout>
    <h1 class="text-3xl font-bold mb-6">Spelers</h1>

    <div class="grid grid-cols-4 gap-6">
        @foreach($players as $player)
            <div class="p-4 border rounded-xl bg-white shadow">
                <img src="{{ $player->photo }}" class="w-full h-40 object-cover rounded mb-3">
                <h2 class="text-xl font-bold">{{ $player->name }}</h2>
                <p class="text-gray-600">#{{ $player->number }} — {{ $player->position }}</p>
        
            </div>
        @endforeach
    </div>
</x-layout>
