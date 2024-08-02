<x-layout>
    <x-slot:title>Page de liste des produits triés par Prix</x-slot:title>
    <x-slot:content>
        <h1>Liste des produits triés par Prix Croissant</h1>

        <ul>
            @foreach($products as $product)
                <li>{{ $product->name }}</li>
                <li>{{ $product->price }}</li>
                *******************************
            @endforeach
        </ul>
    </x-slot:content>
</x-layout>