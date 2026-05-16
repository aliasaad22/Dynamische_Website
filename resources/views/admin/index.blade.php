<x-layout>
    <h1>Admin Dashboard</h1>
    <p>Welkom op het admin dashboard. Hier kun je gebruikers beheren, instellingen aanpassen en meer.</p>
    <ul>
        <li><a href="{{ route('admin.users.index') }}">Gebruikersbeheer</a></li>
        <li><a href="{{ route('admin.users.create') }}">Nieuwe gebruiker toevoegen</a></li>
    
        
    </ul>
    

</x-layout>
