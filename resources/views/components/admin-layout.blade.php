<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">

{{-- TOP NAVBAR --}}
<nav class="bg-gray-900 text-white">

    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

        {{-- LEFT --}}
        <div class="font-bold text-lg">
            Admin Panel
        </div>

        {{-- MENU --}}
        <div class="flex gap-6 text-sm">

            <a href="{{ route('admin.dashboard') }}"
               class="hover:text-gray-300 transition">
                Dashboard
            </a>

            <a href="{{ route('admin.users.index') }}"
               class="hover:text-gray-300 transition">
                Gebruikers
            </a>

            <a href="{{ route('admin.faq-categories.index') }}"
               class="hover:text-gray-300 transition">
                FAQ Categorieën
            </a>

            <a href="{{ route('admin.faq-items.index') }}"
               class="hover:text-gray-300 transition">
                FAQ Vragen
            </a>

        </div>

    </div>

</nav>

{{-- MAIN CONTENT --}}
<div class="max-w-6xl mx-auto p-6">

    {{-- SUCCESS --}}
    @if(session('success'))
        <div class="mb-4 rounded-lg bg-green-100 border border-green-300 text-green-800 px-4 py-3">
            {{ session('success') }}
        </div>
    @endif

    {{-- ERRORS --}}
    @if($errors->any())
        <div class="mb-4 rounded-lg bg-red-100 border border-red-300 text-red-800 px-4 py-3">

            <strong class="block mb-2">Er zijn fouten:</strong>

            <ul class="list-disc list-inside space-y-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif

    {{-- PAGE CONTENT --}}
    <div class="bg-white rounded-2xl shadow p-6">
        {{ $slot }}
    </div>

</div>

</body>
</html>