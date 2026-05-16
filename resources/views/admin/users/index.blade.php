<h1>Gebruikersbeheer</h1>
 
<a href="{{ route('admin.users.create') }}">Nieuwe gebruiker toevoegen</a>

@foreach($users as $user)

    <div>
        {{ $user->username }} - {{ $user->email }}

        <a href="{{ route('admin.users.show', $user) }}">Bekijk</a>
        <a href="{{ route('admin.users.edit', $user) }}">Bewerk</a>

        <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Verwijder</button>
        </form>
    </div>
    
@endforeach
