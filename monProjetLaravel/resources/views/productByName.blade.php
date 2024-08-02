<x-layout>
    <x-slot:title>Page de liste des produits triés par Nom</x-slot:title>
    <x-slot:content>
        <h1>Liste des produits triés par Nom</h1>

        <ul>
            @foreach($products as $product)
                <li>{{ $product->name }}</li>
            @endforeach
        </ul>
    </x-slot:content>
</x-layout>