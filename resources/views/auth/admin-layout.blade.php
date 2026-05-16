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
    {{ $slot }}
</div>

</body>
</html>
