<x-layout>
    <h1 class="text-3xl font-bold mb-6">Nieuw Team</h1>

    <form method="POST" action="{{ route('admin.teams.store') }}">
        @csrf

        <label>Naam</label>
        <input type="text" name="name" class="border p-2 w-full mb-4">

        <label>Logo URL</label>
        <input type="text" name="logo" class="border p-2 w-full mb-4">

        <label>Beschrijving</label>
        <textarea name="description" class="border p-2 w-full mb-4"></textarea>

        <button class="bg-blue-700 text-white px-4 py-2 rounded">Opslaan</button>
    </form>
</x-layout>
