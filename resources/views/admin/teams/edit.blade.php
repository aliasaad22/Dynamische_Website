<x-layout>
    <h1 class="text-3xl font-bold mb-6">Team bewerken</h1>

    <form method="POST" action="{{ route('admin.teams.update', $team->id) }}">
        @csrf
        @method('PUT')

        <label>Naam</label>
        <input type="text" name="name" value="{{ $team->name }}" class="border p-2 w-full mb-4">

        <label>Logo URL</label>
        <input type="text" name="logo" value="{{ $team->logo }}" class="border p-2 w-full mb-4">

        <label>Beschrijving</label>
        <textarea name="description" class="border p-2 w-full mb-4">{{ $team->description }}</textarea>

        <button class="bg-blue-700 text-white px-4 py-2 rounded">Bijwerken</button>
    </form>
</x-layout>
