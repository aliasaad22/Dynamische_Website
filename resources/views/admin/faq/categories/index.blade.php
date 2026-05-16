<x-admin-layout>
    <h1 class="text-2xl font-bold mb-4">FAQ Categorieën</h1>

    <a class="hover:underline btn btn-outline" href="{{ route('admin.faq-categories.create') }}">Nieuwe categorie</a>

    <hr>

    @foreach($categories as $category)
        <div class="border-b border-gray-200 py-2">
            <strong>{{ $category->name }}</strong>

            <a class="hover:underline btn btn-outline" href="{{ route('admin.faq-categories.edit', $category) }}">Bewerk</a>

            <form action="{{ route('admin.faq-categories.destroy', $category) }}"
                  method="POST"
                  style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="hover:underline btn btn-outline" type="submit">Verwijder</button>
            </form>
        </div>
    @endforeach
</x-admin-layout>
