<x-layout>

<div class="max-w-3xl mx-auto py-10">

    <div class="bg-white shadow-lg rounded-2xl overflow-hidden">

        {{-- HEADER --}}
        <div class="bg-blue-600 text-white p-6">
            <h1 class="text-2xl font-bold">Contact</h1>
            <p class="text-blue-100 text-sm">Stuur ons een bericht en we antwoorden zo snel mogelijk</p>
        </div>

        {{-- BODY --}}
        <div class="p-6">

            {{-- SUCCESS --}}
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.submit') }}"
                  method="POST"
                  class="space-y-5">

                @csrf

                {{-- NAAM --}}
                <div>
                    <label class="block text-sm font-medium mb-1">Naam</label>
                    <input type="text"
                           name="name"
                           value="{{ old('name') }}"
                           class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">

                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- EMAIL --}}
                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">

                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- MESSAGE --}}
                <div>
                    <label class="block text-sm font-medium mb-1">Bericht</label>
                    <textarea name="message"
                              rows="6"
                              class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">{{ old('message') }}</textarea>

                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- BUTTON --}}
                <div class="flex justify-end">
                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">
                        Versturen
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

</x-layout>