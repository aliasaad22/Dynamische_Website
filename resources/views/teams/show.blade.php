<x-layout>
    <h1 class="text-3xl font-bold mb-6">{{ $team->name }}</h1>

    <img src="{{ $team->logo }}" class="w-64 mb-6">

    <p class="text-lg">{{ $team->description }}</p>
</x-layout>
