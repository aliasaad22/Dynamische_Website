<x-layout>
    <h1 class="text-3xl font-bold mb-6">Speler bewerken</h1>

    <form method="POST" action="{{ route('admin.players.update', $player->id) }}">
        @csrf
        @method('PUT')

        <label>Naam</label>
        <input type="text" name="name" value="{{ $player->name }}" class="border p-2 w-full mb-4">

        <label>Foto URL</label>
        <input type="text" name="photo" value="{{ $player->photo }}" class="border p-2 w-full mb-4">

        <label>Rugnummer</label>
        <input type="number" name="number" value="{{ $player->number }}" class="border p-2 w-full mb-4">

        <label>Positie</label>
        <input type="text" name="position" value="{{ $player->position }}" class="border p-2 w-full mb-4">

        <label>Team ID</label>
        <input type="number" name="team_id" value="{{ $player->team_id }}" class="border p-2 w-full mb-4">

        <button class="bg-blue-700 text-white px-4 py-2 rounded">Bijwerken</button>
    </form>
</x-layout>
