<x-layout>

<h1 class="text-2xl font-bold mb-4">Mijn profiel bewerken</h1>

@if(session('success'))
    <div class="bg-green-200 text-green-800 p-3 mb-4 rounded">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf

    <div>
        <label class="block font-semibold">Username</label>
        <input type="text" name="username" value="{{ old('username', $user->username) }}" class="border p-2 w-full">
    </div>

    <div>
        <label class="block font-semibold">Verjaardag</label>
        <input type="date" name="birthday" value="{{ old('birthday', $user->birthday) }}" class="border p-2 w-full">
    </div>

    <div>
        <label class="block font-semibold">Profielfoto</label>
        <input type="file" name="profile_photo" class="border p-2 w-full">
    </div>

    <div>
        <label class="block font-semibold">Over mij</label>
        <textarea name="about" class="border p-2 w-full">{{ old('about', $user->about) }}</textarea>
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">Opslaan</button>
</form>

</x-layout>
