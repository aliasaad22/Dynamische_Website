<x-layout>

<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

    <h1 class="text-2xl font-bold mb-4">Profiel bewerken</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Username --}}
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
        <button class="bg-blue-500 text-white px-4 py-2 rounded">
            Opslaan
        </button>

    </form>

</div>

</x-layout>