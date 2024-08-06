<x-layout>
    <x-slot:title>Test Requête Model</x-slot:title>
    <x-slot:content>
        <h1>Test de requêtes avec les model Category, Order et Customer</h1>
{{--@dump($order);--}}
        <h1>N° de commande: {{ $order->number }}</h1>

        <h2>Produits:</h2>
        <ul>
            @foreach ($order->products as $product)
                <liP>roduit : {{ $product->name }}</li>
            @if(isset($product->category->name_category))
                <li>Categorie : {{ $product->category->name_category }}</li>
            @endif
                <li>Quantité : {{ $product->pivot->quantity }}</li>
                <li>Description : {{ $product->description }}</li>
                <li>*******************************************</li>
            @endforeach
        </ul>

    </x-slot:content>

</x-layout>