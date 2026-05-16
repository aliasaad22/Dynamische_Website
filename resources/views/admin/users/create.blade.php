<x-admin-layout>
<h1>Nieuwe gebruiker</h1>

<form action="{{ route('admin.users.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Naam">
    <input type="text" name="username" placeholder="Username">
    <input type="email" name="email" placeholder="Email">
    <input type="date" name="birthday">
    <input type="password" name="password" placeholder="Wachtwoord">

    <label>
        <input type="checkbox" name="is_admin" value="1">
        Admin
    </label>

    <button type="submit">Opslaan</button>
</form>
</x-admin-layout>