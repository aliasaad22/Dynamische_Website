<x-layout>

<div class="max-w-4xl mx-auto py-10">

    <div class="bg-white shadow-lg rounded-2xl overflow-hidden">

        {{-- HEADER --}}
        <div class="bg-gray-900 text-white p-6">
            <h1 class="text-2xl font-bold">Profiel instellingen</h1>
            <p class="text-gray-300 text-sm">Beheer je persoonlijke gegevens</p>
        </div>

        {{-- BODY --}}
        <div class="p-6">

            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-3 mb-6 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST"
                  action="{{ route('profile.update') }}"
                  enctype="multipart/form-data"
                  class="space-y-6">

                @csrf
                @method('PUT')

                {{-- PROFIEL FOTO --}}
                <div class="flex items-center gap-6">

                    <div>
                        @if($user->profile_photo)
                            <img src="{{ asset('storage/' . $user->profile_photo) }}"
                                 class="w-24 h-24 rounded-full object-cover border">
                        @else
                            <div class="w-24 h-24 rounded-full bg-gray-200 flex items-center justify-center text-gray-500">
                                No photo
                            </div>
                        @endif
                    </div>

                    <div>
                        <label class="block font-medium mb-1">Profielfoto</label>
                        <input type="file" name="profile_photo"
                               class="text-sm border p-2 rounded w-full">
                    </div>

                </div>

                {{-- FORM GRID --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div>
                        <label class="text-sm font-medium">Naam</label>
                        <input type="text" name="name"
                               value="{{ old('name', $user->name) }}"
                               class="w-full border rounded-lg p-2 mt-1">
                    </div>

                    <div>
                        <label class="text-sm font-medium">Username</label>
                        <input type="text" name="username"
                               value="{{ old('username', $user->username) }}"
                               class="w-full border rounded-lg p-2 mt-1">
                    </div>

                    <div class="md:col-span-2">
                        <label class="text-sm font-medium">Email</label>
                        <input type="email" name="email"
                               value="{{ old('email', $user->email) }}"
                               class="w-full border rounded-lg p-2 mt-1">
                    </div>

                    <div>
                        <label class="text-sm font-medium">Verjaardag</label>
                        <input type="date" name="birthday"
                               value="{{ old('birthday', $user->birthday?->format('Y-m-d')) }}"
                               class="w-full border rounded-lg p-2 mt-1">
                    </div>

                </div>

                {{-- ABOUT --}}
                <div>
                    <label class="text-sm font-medium">Over mij</label>
                    <textarea name="about"
                              rows="4"
                              class="w-full border rounded-lg p-2 mt-1">{{ old('about', $user->about) }}</textarea>
                </div>

                {{-- BUTTON --}}
                <div class="flex justify-end">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">
                        Opslaan
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

</x-layout>