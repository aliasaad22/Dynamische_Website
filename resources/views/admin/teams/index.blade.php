<x-layout>
    <h1 class="text-3xl font-bold mb-6">Admin — Teams</h1>

    <a href="{{ route('admin.teams.create') }}" class="bg-blue-700 text-white px-4 py-2 rounded">
        Nieuw team +
    </a>

    <table class="w-full mt-6 border">
        <tr class="bg-gray-200">
            <th class="p-2">Naam</th>
            <th class="p-2">Acties</th>
        </tr>

        @foreach($teams as $team)
            <tr>
                <td class="p-2">{{ $team->name }}</td>
                <td class="p-2">
                    <a href="{{ route('admin.teams.edit', $team->id) }}" class="text-blue-700">Bewerken</a>
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>
