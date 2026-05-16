<!DOCTYPE html>
<html lang="nl">
    <header class="bg-blue-900 text-white p-4">
    <nav class="max-w-6xl mx-auto flex items-center justify-between">
        
        {{-- Logo --}}
        <a href="/" class="text-2xl font-bold">
            Real Madrid CF
        </a>

        {{-- Menu links --}}
        <ul class="flex gap-6 text-lg">
            <li>
                <a href="/" class="{{ request()->is('/') ? 'font-bold underline' : '' }}">
                    Home
                </a>
            </li>

            <li>
                <a href="/teams" class="{{ request()->is('teams*') ? 'font-bold underline' : '' }}">
                    Teams
                </a>
            </li>

            <li>
                <a href="/players" class="{{ request()->is('players*') ? 'font-bold underline' : '' }}">
                    Players
                </a>
            </li>

            <li>
                <a href="/faq" class="{{ request()->is('faq*') ? 'font-bold underline' : '' }}">
                    FAQ
                </a>
            </li>
            <li>
                <a href="/contact" class="{{ request()->is('contact*') ? 'font-bold underline' : '' }}">
                    Contact
                </a>
            <div class="navbar-end gap-2">
                @auth
                    <span class="text-sm">{{ auth()->user()->name }}</span>
                    <form method="POST" action="/logout" class="inline">
                        @csrf
                        <button type="submit" class="btn btn-ghost btn-sm">Logout</button>
                    </form>
                @else
                    <a href="/login" class="btn btn-ghost btn-sm">Sign In</a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Sign Up</a>
                @endauth
            </div>
            {{-- Admin menu alleen tonen als user admin is --}}
            @auth
                @if(auth()->user()->is_admin)
                    <li>
                        <a href="/admin" class="{{ request()->is('admin*') ? 'font-bold underline' : '' }}">
                            Admin
                        </a>
                    </li>
                @endif
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
