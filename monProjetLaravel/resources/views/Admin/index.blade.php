<x-layout>
    <x-slot:title>Listes des produits</x-slot:title>
    <x-slot:content>
        <ul>
            @foreach($products as $product)
                <a href="{{ url('/backoffice/show/' . $product->id) }}">
                    <li>{{ $product->name }}</li>
                </a>
            @endforeach

        </ul>
    </x-slot:content>
</x-layout>