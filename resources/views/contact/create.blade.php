<x-layout>

    <h1 class="text-3xl font-bold mb-6">Contact</h1>

    @if(session('success'))
        <div class="p-4 bg-green-200 text-green-900 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block font-bold">Naam</label>
            <input type="text" name="name" class="border p-2 w-full">
        </div>

        <div>
            <label class="block font-bold">Email</label>
            <input type="email" name="email" class="border p-2 w-full">
        </div>

        <div>
            <label class="block font-bold">Bericht</label>
            <textarea name="message" class="border p-2 w-full h-32"></textarea>
        </div>

        <input type="submit" value="Submit">
    </form>

</x-layout>
