<x-admin-layout>

<div class="max-w-3xl mx-auto">

    {{-- TITLE --}}
    <div class="bg-white shadow rounded-2xl p-6 mb-6">
        <h1 class="text-2xl font-bold">Gebruiker bewerken</h1>
        <p class="text-gray-500 text-sm">Pas gebruikersgegevens aan</p>
    </div>

    {{-- FORM CARD --}}
    <div class="bg-white shadow rounded-2xl p-6">

        <form action="{{ route('admin.users.update', $user) }}"
              method="POST"
              enctype="multipart/form-data"
              class="space-y-5">

            @csrf
            @method('PUT')

            {{-- NAME --}}
            <div>
                <label class="text-sm font-medium">Naam</label>
                <input type="text"
                       name="name"
                       value="{{ old('name', $user->name) }}"
                       class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">
            </div>

            {{-- USERNAME --}}
            <div>
                <label class="text-sm font-medium">Username</label>
                <input type="text"
                       name="username"
                       value="{{ old('username', $user->username) }}"
                       class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">
            </div>

            {{-- EMAIL --}}
            <div>
                <label class="text-sm font-medium">Email</label>
                <input type="email"
                       name="email"
                       value="{{ old('email', $user->email) }}"
                       class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">
            </div>

            {{-- BIRTHDAY --}}
            <div>
                <label class="text-sm font-medium">Verjaardag</label>
                <input type="date"
                       name="birthday"
                       value="{{ old('birthday', $user->birthday?->format('Y-m-d')) }}"
                       class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">
            </div>

            {{-- ABOUT --}}
            <div>
                <label class="text-sm font-medium">Over mij</label>
                <textarea name="about"
                          rows="4"
                          class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">{{ old('about', $user->about) }}</textarea>
            </div>

            {{-- PROFILE PHOTO --}}
            <div>
                <label class="text-sm font-medium">Profielfoto</label>
                <input type="file"
                       name="profile_photo"
                       class="w-full mt-1">

                @if($user->profile_photo)
                    <div class="mt-3">
                        <p class="text-sm text-gray-500 mb-2">Huidige foto:</p>
                        <img src="{{ asset('storage/' . $user->profile_photo) }}"
                             class="w-24 h-24 rounded-full object-cover border">
                    </div>
                @endif
            </div>

            {{-- ADMIN CHECK --}}
            <div class="flex items-center gap-2">
                <input type="checkbox"
                       name="is_admin"
                       value="1"
                       class="h-4 w-4"
                       {{ old('is_admin', $user->is_admin) ? 'checked' : '' }}>

                <label class="text-sm">Admin rechten</label>
            </div>

            {{-- BUTTONS --}}
            <div class="flex justify-between pt-4">

                <a href="{{ route('admin.users.show', $user) }}"
                   class="px-5 py-2 border rounded-lg text-gray-600 hover:bg-gray-100">
                    Annuleren
                </a>

                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">
                    Opslaan
                </button>

            </div>

        </form>

    </div>

</div>

</x-admin-layout>