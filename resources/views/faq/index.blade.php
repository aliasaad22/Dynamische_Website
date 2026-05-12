<x-layout>
    <h1>FAQ</h1>

    @foreach($faq as $item)
        <p><strong>{{ $item->question }}</strong></p>
        <p>{{ $item->answer }}</p>
        <hr>
    @endforeach
</x-layout>
