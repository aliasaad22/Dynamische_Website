<x-layout>

    <h1 class="text-3xl font-bold mb-6">Contact</h1>

    {{-- Succesmelding --}}
    @if(session('success'))
        <div class="p-4 bg-green-200 text-green-900 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
        @csrf

        
        <div>
            <label class="block font-bold">Naam</label>
            <input 
                type="text" 
                name="name" 
                value="{{ old('name') }}"
                class="border p-2 w-full"
            >
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div>
            <label class="block font-bold">Email</label>
            <input 
                type="email" 
                name="email" 
                value="{{ old('email') }}"
                class="border p-2 w-full"
            >
            @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        {{-- Bericht --}}
        <div>
            <label class="block font-bold">Bericht</label>
            <textarea 
                name="message" 
                class="border p-2 w-full h-32"
            >{{ old('message') }}</textarea>
            @error('message')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        {{-- Submit knop --}}
        <input 
            type="submit" 
            value="Versturen"
            class="bg-blue-600 text-white px-4 py-2 rounded cursor-pointer hover:bg-blue-700"
        >
    </form>

</x-layout>