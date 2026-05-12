<x-layout>
    <h1 class="text-3xl font-bold mb-6">Admin — Spelers</h1>

    <a href="{{ route('admin.players.create') }}" class="bg-blue-700 text-white px-4 py-2 rounded">
        Nieuwe speler +
    </a>

    <table class="w-full mt-6 border">
        <tr class="bg-gray-200">
            <th class="p-2">Naam</th>
            <th class="p-2">Nummer</th>
            <th class="p-2">Acties</th>
        </tr>

        @foreach($players as $player)
            <tr>
                <td class="p-2">{{ $player->name }}</td>
                <td class="p-2">#{{ $player->number }}</td>
                <td class="p-2">
                    <a href="{{ route('admin.players.edit', $player->id) }}" class="text-blue-700">Bewerken</a>
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>
