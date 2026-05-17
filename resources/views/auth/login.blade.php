<x-layout>

<div class="min-h-screen flex items-center justify-center bg-gray-50 py-10">

    <div class="w-full max-w-md">

        {{-- CARD --}}
        <div class="bg-white shadow-xl rounded-2xl p-8">

            {{-- TITLE --}}
            <h1 class="text-3xl font-bold text-center mb-2">
                Welcome Back
            </h1>

            <p class="text-center text-gray-500 mb-6">
                Log in op je account
            </p>

            {{-- FORM --}}
            <form method="POST" action="/login" class="space-y-4">
                @csrf

                {{-- EMAIL --}}
                <div>
                    <label class="text-sm font-medium">Email</label>
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="mail@example.com"
                           autofocus
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

                {{-- REMEMBER --}}
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="remember" class="h-4 w-4">
                    <label class="text-sm text-gray-600">Remember me</label>
                </div>

                {{-- BUTTON --}}
                <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition">
                    Sign In
                </button>

            </form>

            {{-- FOOTER --}}
            <div class="text-center mt-6 text-sm text-gray-600">
                Don't have an account?
                <a href="/register" class="text-blue-600 font-semibold">
                    Register
                </a>
            </div>

        </div>

    </div>

</div>

</x-layout>