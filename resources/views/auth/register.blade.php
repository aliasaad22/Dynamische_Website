<x-layout>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 via-white to-gray-100 px-4">

    <div class="w-full max-w-md">

        {{-- CARD --}}
        <div class="bg-white/90 backdrop-blur-xl shadow-2xl rounded-3xl p-8 border border-gray-100">

            {{-- HEADER --}}
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">
                    Create Account
                </h1>

                <p class="text-gray-500 mt-2">
                    Maak een nieuw account en start vandaag nog
                </p>
            </div>

            {{-- FORM --}}
            <form method="POST" action="/register" class="space-y-5">
                @csrf

                {{-- NAME --}}
                <div>
                    <label class="text-sm font-medium text-gray-700">Naam</label>
                    <input type="text"
                           name="name"
                           value="{{ old('name') }}"
                           placeholder="John Doe"
                           class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- USERNAME --}}
                <div>
                    <label class="text-sm font-medium text-gray-700">Username</label>
                    <input type="text"
                           name="username"
                           value="{{ old('username') }}"
                           placeholder="johndoe123"
                           class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 outline-none transition">
                    @error('username')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- EMAIL --}}
                <div>
                    <label class="text-sm font-medium text-gray-700">Email</label>
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="mail@example.com"
                           class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 outline-none transition">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- PASSWORD --}}
                <div>
                    <label class="text-sm font-medium text-gray-700">Wachtwoord</label>
                    <input type="password"
                           name="password"
                           placeholder="••••••••"
                           class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 outline-none transition">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- CONFIRM PASSWORD --}}
                <div>
                    <label class="text-sm font-medium text-gray-700">Bevestig wachtwoord</label>
                    <input type="password"
                           name="password_confirmation"
                           placeholder="••••••••"
                           class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 outline-none transition">
                </div>

                {{-- BUTTON --}}
                <button type="submit"
                        class="w-full py-3 rounded-xl text-white font-semibold bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 shadow-md transition transform hover:scale-[1.02]">
                    Create Account
                </button>

            </form>

            {{-- FOOTER --}}
            <div class="text-center mt-6 text-sm text-gray-600">
                Already have an account?
                <a href="/login" class="text-blue-600 font-semibold hover:underline">
                    Sign in
                </a>
            </div>

        </div>

    </div>

</div>

</x-layout>