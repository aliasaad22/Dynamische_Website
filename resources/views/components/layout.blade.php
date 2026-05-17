
<!DOCTYPE html>
<html lang="nl">
     <script src="https://cdn.tailwindcss.com"></script>
    <header class="">
    <nav class="w-full bg-gray-900 text-white px-6 py-4 flex items-center justify-between">

    <!-- Logo -->
    <a href="/" class="text-2xl font-bold">
        Real Madrid CF
    </a>

    <!-- Menu -->
    <ul class="flex items-center gap-6 text-lg">

        <li><a href="/" class="{{ request()->is('/') ? 'font-bold underline' : '' }}">Home</a></li>
        <li><a href="/teams" class="{{ request()->is('teams*') ? 'font-bold underline' : '' }}">Teams</a></li>
        <li><a href="/players" class="{{ request()->is('players*') ? 'font-bold underline' : '' }}">Players</a></li>
        <li><a href="{{ route('faq.index') }}" class="{{ request()->is('faq*') ? 'font-bold underline' : '' }}">FAQ</a></li>
        <li><a href="/contact" class="{{ request()->is('contact*') ? 'font-bold underline' : '' }}">Contact</a></li>
        <li><a href="/profile" class="{{ request()->is('profile*') ? 'font-bold underline' : '' }}">Profile</a></li>

        @auth
            @if(auth()->user()->is_admin)
                <li>
                    <a href="/admin" class="{{ request()->is('admin*') ? 'font-bold underline' : '' }}">
                        Admin
                    </a>
                </li>
            @endif

            <li>
                <form method="POST" action="/logout">
                    @csrf
                    <button class="bg-blue-600 px-4 py-1 rounded hover:bg-blue-700 transition">
                        Logout
                    </button>
                </form>
            </li>

        @else
            <li><a href="/login" class="bg-gray-300 text-gray-900 px-4 py-1 rounded">Sign In</a></li>
            <li><a href="{{ route('register') }}" class="bg-blue-600 px-4 py-1 rounded">Sign Up</a></li>
        @endauth
       
    </ul>


</nav>

</header>

<head>
    <meta charset="UTF-8">
    <title>Real Madrid CF</title>
    <link href="/css/app.css" rel="stylesheet">
    
</head>
<body class="bg-gray-100 text-gray-900">
    {{ $slot }}
    <header class="p-6 bg-blue-900 text-white mb-10">
      
    </header>

    <main class="max-w-6xl mx-auto">
        
    </main>

    <footer class="p-6 mt-10 bg-blue-900 text-white text-center">
        © {{ date('Y') }} Real Madrid CF — Alle rechten voorbehouden
    </footer>
</body>
</html>
