<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    
</head>
 <script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gray-100 text-gray-900">

{{-- NAVBAR --}}
<nav class="bg-gray-900 text-white px-6 py-4">
    <div class="max-w-full mx-auto flex items-left gap-6 flex justify-center ">

        <a href="{{ route('admin.dashboard') }}"
           class="bg-hover:underline font-bold">
            Dashboard
        </a>

        <a href="{{ route('admin.users.index') }}"
           class="hover:underline">
            Gebruikers
        </a>

        <a href="{{ route('admin.faq-categories.index') }}"
           class="hover:underline">
            FAQ Categorieën
        </a>

        <a href="{{ route('admin.faq-items.index') }}"
           class="hover:underline">
            FAQ Vragen
        </a>

    </div>
</nav>

{{-- CONTENT --}}
<div class="max-w-6xl mx-auto p-6">

    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))
        <div class="mb-4 rounded-md bg-green-100 border border-green-300 text-green-800 px-4 py-3">
            {{ session('success') }}
        </div>
    @endif

    {{-- ERROR MESSAGES --}}
    @if($errors->any())
        <div class="mb-4 rounded-md bg-red-100 border border-red-300 text-red-800 px-4 py-3">
            <strong class="block mb-2">Er zijn fouten:</strong>
            <ul class="list-disc list-inside space-y-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- PAGE CONTENT --}}
    {{ $slot }}

</div>

</body>
</html>