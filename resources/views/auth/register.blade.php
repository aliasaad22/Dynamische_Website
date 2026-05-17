<x-layout>

<div class="min-h-screen flex items-center justify-center bg-gray-50 py-10">

    <div class="w-full max-w-md">

        {{-- CARD --}}
        <div class="bg-white shadow-xl rounded-2xl p-8">

            {{-- TITLE --}}
            <h1 class="text-3xl font-bold text-center mb-2">
                Create Account
            </h1>

            <p class="text-center text-gray-500 mb-6">
                Maak een nieuw account aan
            </p>

            {{-- FORM --}}
            <form method="POST" action="/register" class="space-y-4">
                @csrf

                {{-- NAME --}}
                <div>
                    <label class="text-sm font-medium">Naam</label>
                    <input type="text"
                           name="name"
                           value="{{ old('name') }}"
                           placeholder="John Doe"
                           class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- USERNAME --}}
                <div>
                    <label class="text-sm font-medium">Username</label>
                    <input type="text"
                           name="username"
                           value="{{ old('username') }}"
                           placeholder="johndoe123"
                           class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">
                    @error('username')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- EMAIL --}}
                <div>
                    <label class="text-sm font-medium">Email</label>
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="mail@example.com"
                           class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- PASSWORD --}}
                <div>
                    <label class="text-sm font-medium">Wachtwoord</label>
                    <input type="password"
                           name="password"
                           placeholder="••••••••"
                           class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- CONFIRM --}}
                <div>
                    <label class="text-sm font-medium">Bevestig wachtwoord</label>
                    <input type="password"
                           name="password_confirmation"
                           placeholder="••••••••"
                           class="w-full border rounded-lg p-3 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">
                </div>

                {{-- BUTTON --}}
                <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition">
                    Register
                </button>

            </form>

            {{-- FOOTER --}}
            <div class="text-center mt-6 text-sm text-gray-600">
                Already have an account?
                <a href="/login" class="text-blue-600 font-semibold">
                    Sign in
                </a>
            </div>

        </div>

    </div>

</div>

</x-layout>