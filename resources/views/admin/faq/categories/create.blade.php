
<x-admin-layout>
    <h1>Nieuwe FAQ Categorie</h1>

<form action="{{ route('admin.faq-categories.store') }}" method="POST">
    @csrf

    <label>Naam categorie:</label>
    <input type="text" name="name">

    <button type="submit">Opslaan</button>
</form>

<a href="{{ route('admin.faq-categories.index') }}">Annuleren</a>
</x-admin-layout>