<h1>Nieuwe FAQ Vraag</h1>

<form action="{{ route('admin.faq-items.store') }}" method="POST">
    @csrf

    <label>Categorie:</label>
    <select name="faq_category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <br><br>

    <label>Vraag:</label>
    <input type="text" name="question">

    <br><br>

    <label>Antwoord:</label>
    <textarea name="answer"></textarea>

    <br><br>

    <button type="submit">Opslaan</button>
</form>

<a href="{{ route('admin.faq-items.index') }}">Annuleren</a>
