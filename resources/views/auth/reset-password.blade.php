<x-layout>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 via-white to-gray-100 px-4">

    <div class="w-full max-w-md">

        {{-- CARD --}}
        <div class="bg-white/90 backdrop-blur-xl shadow-2xl rounded-3xl p-8 border border-gray-100">

            {{-- HEADER --}}
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">
                    Reset Password
                </h1>

                <p class="text-gray-500 mt-2">
                    Kies een nieuw veilig wachtwoord
                </p>
            </div>

            {{-- ERROR --}}
            @if(session('error'))
                <div class="mb-4 p-3 rounded-xl bg-red-50 text-red-600 text-sm border border-red-100">
                    {{ session('error') }}
                </div>
            @endif

            {{-- FORM --}}
            <form method="POST" action="{{ route('reset.password.post') }}" class="space-y-5">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                {{-- EMAIL --}}
                <div>
                    <label class="text-sm font-medium text-gray-700">Email</label>
                    <input type="email"
                           name="email"
                           placeholder="jouw@email.com"
                           required
                           class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 outline-none transition">
                </div>

                {{-- PASSWORD --}}
                <div>
                    <label class="text-sm font-medium text-gray-700">Nieuw wachtwoord</label>
                    <input type="password"
                           name="password"
                           placeholder="••••••••"
                           required
                           class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 outline-none transition">
                </div>

                {{-- CONFIRM PASSWORD --}}
                <div>
                    <label class="text-sm font-medium text-gray-700">Bevestig wachtwoord</label>
                    <input type="password"
                           name="password_confirmation"
                           placeholder="••••••••"
                           required
                           class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 outline-none transition">
                </div>

                {{-- BUTTON --}}
                <button type="submit"
                        class="w-full py-3 rounded-xl text-white font-semibold bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 shadow-md transition transform hover:scale-[1.02]">
                    Reset Password
                </button>

            </form>

        </div>

    </div>

</div>

</x-layout>