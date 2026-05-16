<x-admin-layout>
    <h1>FAQ Categorieën</h1>

    <a href="{{ route('admin.faq-categories.create') }}">Nieuwe categorie</a>

    <hr>

    @foreach($categories as $category)
        <div style="padding:10px; border-bottom:1px solid #ddd;">
            <strong>{{ $category->name }}</strong>

            <a href="{{ route('admin.faq-categories.edit', $category) }}">Bewerk</a>

            <form action="{{ route('admin.faq-categories.destroy', $category) }}"
                  method="POST"
                  style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Verwijder</button>
            </form>
        </div>
    @endforeach
</x-admin-layout>
