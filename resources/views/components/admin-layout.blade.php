<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        nav {
            background: #222;
            padding: 10px;
        }
        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            padding: 20px;
        }
    </style>
</head>
<body>

<nav>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <a href="{{ route('admin.users.index') }}">Gebruikers</a>
    <a href="{{ route('admin.faq-categories.index') }}">FAQ Categorieën</a>
    <a href="{{ route('admin.faq-items.index') }}">FAQ Vragen</a>
</nav>

<div class="container">
    @if(session('success'))
    <div style="background:#d4edda; color:#155724; padding:10px; border:1px solid #c3e6cb; margin-bottom:15px;">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div style="background:#f8d7da; color:#721c24; padding:10px; border:1px solid #f5c6cb; margin-bottom:15px;">
        <strong>Er zijn fouten:</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {{ $slot }}
</div>

</body>
</html>
