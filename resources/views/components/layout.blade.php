
<!DOCTYPE html>
<html lang="nl">
     <script src="https://cdn.tailwindcss.com"></script>
    <header class="">
    <nav class="max-w-full mx-auto flex items-center justify-between bg-gray-900 text-white px-6 py-4  ">
        
        {{-- Logo --}}
        <a href="/" class="text-2xl font-bold ">
            Real Madrid CF
        </a>

        {{-- Menu links --}}
        <ul class="flex gap-6 text-lg ">
            <li>
                <a href="/" class="{{ request()->is('/') ? 'font-bold underline  ' : ' ' }}">
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
               
                <a href="{{ route('faq.index') }}">FAQ</a>

            </li>
            <li>
                <a href="/contact" class="{{ request()->is('contact*') ? 'font-bold underline' : '' }}">
                    Contact
                </a>
            </li>
              @auth
                @if(auth()->user()->is_admin)
                    <li>
                        <a href="/admin" class="{{ request()->is('admin*') ? '' : '' }}">
                            Admin
                        </a>
                    </li>
                @endif
            <li class="navbar-end gap-2">
                @auth
                    <form method="POST" action="/logout" class="inline">
                        @csrf
                        <button type="submit" class="bg-blue-600 text-white px-4  rounded">Logout</button>
                    </form>
                @else
                    <a href="/login" class="bg-gray-300 text-gray-800 px-4 py-2 rounded">Sign In</a>
                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4  rounded">Sign Up</a>
                @endauth
            </li>
            {{-- Admin menu alleen tonen als user admin is --}}
          
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
