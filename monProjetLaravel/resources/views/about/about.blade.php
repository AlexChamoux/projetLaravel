<x-layout>
    <x-slot:title>Test Requête Model</x-slot:title>
    <x-slot:content>
        <h1>Test de requêtes avec les model Category, Order et Customer</h1>
@dump($data);
        @foreach($data as $toto)
            <h2>{{ $toto }}</h2>

        @endforeach

    </x-slot:content>


</x-layout>