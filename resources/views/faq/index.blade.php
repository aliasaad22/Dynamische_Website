<x-layout>

    <h1 class="text-3xl font-bold mb-6">Veelgestelde vragen</h1>

    @foreach($categories as $category)
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-3">{{ $category->name }}</h2>

            <div class="space-y-4">
                @foreach($category->items as $item)
                    <div class="p-4 border rounded-xl bg-white shadow">
                        <h3 class="font-bold">{{ $item->question }}</h3>
                        <p class="text-gray-700 mt-1">{{ $item->answer }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach

</x-layout>
