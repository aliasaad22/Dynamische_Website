
<x-admin-layout>
<h1>Gebruikersprofiel</h1>

<p><strong>Naam:</strong> {{ $user->name }}</p>

<p><strong>Username:</strong> {{ $user->username }}</p>

<p><strong>Email:</strong> {{ $user->email }}</p>

<p><strong>Verjaardag:</strong> {{ $user->birthday }}</p>

<p><strong>Over mij:</strong> {{ $user->about ?? 'Geen info ingevuld' }}</p>

<p><strong>Admin:</strong> 
    @if($user->is_admin)
        Ja
    @else
        Nee
    @endif
</p>

<p><strong>Account aangemaakt:</strong> {{ $user->created_at->format('d/m/Y H:i') }}</p>

@if($user->profile_photo)
    <p><strong>Profielfoto:</strong></p>
    <img src="{{ asset('storage/' . $user->profile_photo) }}" 
         alt="Profielfoto" 
         width="150">
@else
    <p>Geen profielfoto</p>
@endif

<a href="{{ route('admin.users.edit', $user) }}">Bewerk gebruiker</a>

<form action="{{ route('admin.users.destroy', $user) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Weet je het zeker?')">
        Verwijder gebruiker
    </button>
</form>

<a class=" hover:underline btn btn-outline" href="{{ route('admin.users.index') }}">Terug naar overzicht</a>
</x-admin-layout>