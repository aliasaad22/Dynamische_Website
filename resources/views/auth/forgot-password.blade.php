<x-layout>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 via-white to-gray-100 px-4">

    <div class="w-full max-w-md">

        {{-- CARD --}}
        <div class="bg-white/90 backdrop-blur-xl shadow-2xl rounded-3xl p-8 border border-gray-100">

            {{-- HEADER --}}
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">
                    Forgot Password
                </h1>

                <p class="text-gray-500 mt-2">
                    Vul je e-mail in en ontvang een reset link
                </p>
            </div>

            {{-- SUCCESS MESSAGE --}}
            @if(session('message'))
                <div class="mb-4 p-3 rounded-xl bg-green-50 text-green-700 text-sm border border-green-100">
                    {{ session('message') }}
                </div>
            @endif

            {{-- FORM --}}
            <form method="POST" action="{{ route('forget.password.post') }}" class="space-y-5">
                @csrf

                {{-- EMAIL --}}
                <div>
                    <label class="text-sm font-medium text-gray-700">Email</label>
                    <input type="email"
                           name="email"
                           placeholder="jouw@email.com"
                           required
                           class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 outline-none transition">

                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- BUTTON --}}
                <button type="submit"
                        class="w-full py-3 rounded-xl text-white font-semibold bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 shadow-md transition transform hover:scale-[1.02]">
                    Send Reset Link
                </button>

            </form>

            {{-- FOOTER --}}
            <div class="text-center mt-6 text-sm text-gray-600">
                Remember your password?
                <a href="/login" class="text-blue-600 font-semibold hover:underline">
                    Sign in
                </a>
            </div>

        </div>

    </div>

</div>

</x-layout>