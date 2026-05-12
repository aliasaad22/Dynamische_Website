<x-layout>
    <h1 class="text-3xl font-bold mb-6">Teams</h1>

    <div class="grid grid-cols-3 gap-6">
        @foreach($teams as $team)
            <div class="p-4 border rounded-xl bg-white shadow">
                <img src="{{ $team->logo }}" class="w-full h-40 object-contain mb-3">
                <h2 class="text-xl font-bold">{{ $team->name }}</h2>
                <p class="text-gray-600">{{ $team->description }}</p>
                <a href="/teams/{{ $team->id }}" class="text-blue-700 font-semibold mt-3 inline-block">
                    Bekijk team →
                </a>
            </div>
        @endforeach
    </div>
</x-layout>
