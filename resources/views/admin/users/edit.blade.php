<h1>Gebruiker bewerken</h1>
 @csrf
<form action="{{ route('admin.users.update', $user) }}" method="POST" enctype="multipart/form-data">
    
    @method('PUT')

    <div>
        <label>Naam:</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}">
    </div>

    <div>
        <label>Username:</label>
        <input type="text" name="username" value="{{ old('username', $user->username) }}">
    </div>

    <div>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}">
    </div>

    <div>
        <label>Verjaardag:</label>
        <input type="date" name="birthday" value="{{ old('birthday', $user->birthday) }}">
    </div>

    <div>
        <label>Over mij:</label>
        <textarea name="about">{{ old('about', $user->about) }}</textarea>
    </div>

    <div>
        <label>Nieuwe profielfoto:</label>
        <input type="file" name="profile_photo">
    </div>

    @if($user->profile_photo)
      <div>
            <p>Huidige profielfoto:</p>
            <img src="{{ asset('storage/' . $user->profile_photo) }}" 
                 width="120" 
                 alt="Profielfoto">
        </div>
    @endif

    <div>
        <label>
            <input type="checkbox" name="is_admin" value="1"
                {{ old('is_admin', $user->is_admin) ? 'checked' : '' }}>
            Admin rechten
        </label>
    </div>

    <button type="submit">Opslaan</button>
</form>

<a href="{{ route('admin.users.show', $user) }}">Annuleren</a>