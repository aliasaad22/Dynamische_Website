
<x-admin-layout>
    <h1>Categorie bewerken</h1>

<form action="{{ route('admin.faq-categories.update', $faq_category) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Naam categorie:</label>
    <input type="text" name="name" value="{{ $faq_category->name }}">

    <button type="submit">Opslaan</button>
</form>

<a href="{{ route('admin.faq-categories.index') }}">Annuleren</a>
</x-admin-layout>