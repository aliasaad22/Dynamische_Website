<x-admin-layout>

<div class="max-w-6xl mx-auto">

    {{-- HEADER --}}
    <div class="bg-white shadow rounded-2xl p-6 mb-6 flex justify-between items-center">

        <div>
            <h1 class="text-2xl font-bold">Gebruikersbeheer</h1>
            <p class="text-gray-500 text-sm">Beheer alle gebruikers</p>
        </div>

        <a href="{{ route('admin.users.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
            + Nieuwe gebruiker
        </a>

    </div>

    {{-- TABLE --}}
    <div class="bg-white shadow rounded-2xl overflow-hidden">

        <table class="w-full text-left">

            <thead class="bg-gray-100 text-gray-700 text-sm">
                <tr>
                    <th class="p-4">Naam</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Rol</th>
                    <th class="p-4 text-right">Acties</th>
                </tr>
            </thead>

            <tbody>

                @foreach($users as $user)

                    <tr class="border-t hover:bg-gray-50 transition">

                        {{-- NAME --}}
                        <td class="p-4 font-medium">
                            {{ $user->name }}
                        </td>

                        {{-- EMAIL --}}
                        <td class="p-4 text-gray-600">
                            {{ $user->email }}
                        </td>

                        {{-- ROLE --}}
                        <td class="p-4">
                            @if($user->is_admin)
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded">
                                    Admin
                                </span>
                            @else
                                <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">
                                    User
                                </span>
                            @endif
                        </td>

                        {{-- ACTIONS --}}
                        <td class="p-4 text-right">

                            <div class="flex justify-end gap-2">

                                <a href="{{ route('admin.users.show', $user) }}"
                                   class="px-3 py-1 text-sm border rounded-lg hover:bg-gray-100">
                                    Bekijk
                                </a>

                                <a href="{{ route('admin.users.edit', $user) }}"
                                   class="px-3 py-1 text-sm border rounded-lg hover:bg-gray-100">
                                    Bewerk
                                </a>

                                <form action="{{ route('admin.users.destroy', $user) }}"
                                      method="POST"
                                      onsubmit="return confirm('Weet je zeker dat je deze gebruiker wil verwijderen?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="px-3 py-1 text-sm border border-red-300 text-red-600 rounded-lg hover:bg-red-50">
                                        Verwijder
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

</x-admin-layout>