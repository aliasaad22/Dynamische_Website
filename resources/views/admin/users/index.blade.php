<x-admin-layout>
    <h1 class="text-2xl font-bold mb-4">Gebruikersbeheer</h1>

    <a class="hover:underline btn btn-outline" href="{{ route('admin.users.create') }}">Nieuwe gebruiker</a>

    @foreach($users as $user)
        <div>
            {{ $user->name }}
            <a class="hover:underline btn btn-outline" href="{{ route('admin.users.show', $user) }}">Bekijk</a>
            <a class="hover:underline btn btn-outline" href="{{ route('admin.users.edit', $user) }}">Bewerk</a>

            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="hover:underline btn btn-outline">Verwijder</button>
            </form>
        </div>
    @endforeach
</x-admin-layout>
