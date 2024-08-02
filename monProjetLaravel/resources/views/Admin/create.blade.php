<x-layoutBack>
    <x-slot:title>Create</x-slot:title>
    <x-slot:content>

        <h1>Back Office - Gestion des Produits</h1>

        <!-- Formulaire pour ajouter ou éditer un produit -->
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

        <!-- Liste des produits avec options d'édition et de suppression -->
        <h2>Liste des Produits</h2>
        <table border="1">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <!-- Bouton pour éditer le produit -->
                        <a href="{{ route('products.edit', $product->id) }}">Éditer</a>

                        <!-- Formulaire pour supprimer le produit -->
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </x-slot:content>
</x-layoutBack>