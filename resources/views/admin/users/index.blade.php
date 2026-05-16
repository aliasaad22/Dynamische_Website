<x-admin-layout>
    <h1>Gebruikersbeheer</h1>

    <a href="{{ route('admin.users.create') }}">Nieuwe gebruiker</a>

    @foreach($users as $user)
        <div>
            {{ $user->name }}
            <a href="{{ route('admin.users.show', $user) }}">Bekijk</a>
            <a href="{{ route('admin.users.edit', $user) }}">Bewerk</a>

            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button>Verwijder</button>
            </form>
        </div>
    @endforeach
</x-admin-layout>
