<x-layout>
 

    <div class="grid grid-cols-3 gap-6">
        @foreach($teams as $team)
            <div class="p-4 border rounded-xl bg-white shadow">
            
                <h1 class="text-xl font-bold">{{ $team->name }}</h1>
                 <img src="{{ $team->logo }}" class="w-full h-40 object-contain mb-3">
                <p class="text-gray-600">{{ $team->description }}</p>
                
        
            </div>
        @endforeach
    </div>
</x-layout>
