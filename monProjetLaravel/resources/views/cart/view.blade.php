<x-layout>
    <x-slot:title>Mon Panier</x-slot:title>
    <x-slot:content>
        <h1>Mon Panier</h1>

        @if($products->isEmpty())
            <p>Votre panier est vide.</p>
        @else
            <ul>
                @foreach($products as $product)
                    <li>
                        <form action="{{ route('cart.update', $product->id) }}" method="POST">
                            @csrf
                            <div>
                                {{ $product->name }} -
                                <input type="number" name="quantity" value="{{ $product->pivot->quantity }}" min="1">
                                x {{ $product->price }} €
                                <button type="submit">Mettre à jour</button>
                            </div>
                        </form>
                        <form action="{{ route('cart.remove', $product->id) }}" method="POST" style="display:inline">
                            @csrf
                            <button type="submit">Supprimer</button>
                        </form>
                    </li>
                @endforeach
            </ul>
            <form action="{{ route('cart.checkout') }}" method="POST">
                @csrf
                <button type="submit">Passer à la commande</button>
            </form>
        @endif
    </x-slot:content>
</x-layout>
