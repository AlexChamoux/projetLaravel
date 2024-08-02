<x-layoutBack>
    <x-slot:title>Create or Edit</x-slot:title>
    <x-slot:content>
        <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST">
            @csrf
            @if(isset($product))
                @method('PUT')
            @endif

            <input type="hidden" name="id" value="{{ $product->id ?? '' }}">

            <div>
                <label for="name">Nom du Produit:</label>
                <input type="text" id="name" name="name" value="{{ $product->name ?? old('name') }}" required>
            </div>
            <div>
                <label for="price">Prix:</label>
                <input type="number" id="price" name="price" value="{{ $product->price ?? old('price') }}" step="0.01" required>
            </div>
            <button type="submit">{{ isset($product) ? 'Mettre à jour' : 'Ajouter' }} le Produit</button>
        </form>
    </x-slot:content>
</x-layoutBack>