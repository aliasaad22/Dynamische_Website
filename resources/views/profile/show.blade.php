<x-layout>

<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

    <h1 class="text-3xl font-bold mb-4">
        {{ $user->username ?? $user->name }}
    </h1>

    {{-- Profielfoto --}}
    @if($user->profile_photo)
        <img src="{{ asset('storage/' . $user->profile_photo) }}"
             class="w-32 h-32 rounded-full object-cover mb-4">
    @endif

    {{-- Verjaardag --}}
    @if($user->birthday)
        <p><strong>Verjaardag:</strong>
            {{ $user->birthday->format('d/m/Y') }}
        </p>
    @endif

    {{-- About --}}
    @if($user->about)
        <p class="mt-4 text-gray-700">
            {{ $user->about }}
        </p>
    @endif

</div>

</x-layout>