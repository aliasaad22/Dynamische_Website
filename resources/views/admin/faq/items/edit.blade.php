<h1>FAQ Vraag bewerken</h1>

<form action="{{ route('admin.faq-items.update', $faq_item) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Categorie:</label>
    <select name="faq_category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{ $faq_item->faq_category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Vraag:</label>
    <input type="text" name="question" value="{{ $faq_item->question }}">

    <br><br>

    <label>Antwoord:</label>
    <textarea name="answer">{{ $faq_item->answer }}</textarea>

    <br><br>

    <button type="submit">Opslaan</button>
</form>

<a href="{{ route('admin.faq-items.index') }}">Annuleren</a>
