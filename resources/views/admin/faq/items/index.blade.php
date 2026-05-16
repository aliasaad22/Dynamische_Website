
<x-admin-layout>
    <h1>FAQ Vragen</h1>

<a href="{{ route('admin.faq-items.create') }}">Nieuwe vraag toevoegen</a>

<hr>

@foreach($items as $item)
    <div style="padding:10px; border-bottom:1px solid #ddd;">
        <strong>{{ $item->question }}</strong><br>
        <em>Categorie:</em> {{ $item->category->name ?? 'Geen categorie' }}


        <br><br>

        <a href="{{ route('admin.faq-items.edit', $item) }}">Bewerk</a>

        <form action="{{ route('admin.faq-items.destroy', $item) }}" 
              method="POST" 
              style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Verwijder</button>
        </form>
    </div>
@endforeach
</x-admin-layout>