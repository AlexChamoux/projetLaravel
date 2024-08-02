<x-layout>
<x-slot:title>Details du produit</x-slot:title>
    <x-slot:content>
        <h2>Liste des Produits</h2>
        <table border="1">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Poids/th>
                <th>Réduction</th>
                <th>Url de l'image</th>
                <th>Quantité restante</th>
                <th>Status</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->weight }}</td>
                    <td>{{ $product->discount }}</td>
                    <td>{{ $product->image }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->status }}</td>
                    <td>{{ $product->categories_id }}</td>
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
</x-layout>