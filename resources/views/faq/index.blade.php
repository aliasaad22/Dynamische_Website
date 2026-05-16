<h1>Veelgestelde vragen (FAQ)</h1>

@foreach($categories as $category)
    <h2>{{ $category->name }}</h2>

    @if($category->items->count() === 0)
        <p>Geen vragen in deze categorie.</p>
    @endif

    <ul>
        @foreach($category->items as $item)
            <li style="margin-bottom: 15px;">
                <strong>{{ $item->question }}</strong><br>
                <span>{{ $item->answer }}</span>
            </li>
        @endforeach
    </ul>

    <hr>
@endforeach
