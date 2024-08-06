<x-layoutBack>
<x-slot:title>Details du produit</x-slot:title>
    <x-slot:content>
        <h2>Liste des Produits</h2>
        <table>
            <tr>
                <td>ID</td>
                <td>{{ $product->id }}</td>
            </tr>
            <tr>
                <td>Nom</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{ $product->description }}</td>
            </tr>
            <tr>
                <td>Prix</td>
                <td>{{ $product->price }}</td>
            </tr>
            <tr>
                <td>Poids</td>
                <td>{{ $product->weight }}</td>
            </tr>
            <tr>
                <td>Réduction</td>
                <td>{{ $product->discount }}</td>
            </tr>
            <tr>
                <td>Url de l'image</td>
                <td>{{ $product->image }}</td>
            </tr>
            <tr>
                <td>Quantité restante</td>
                <td>{{ $product->quantity }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{ $product->status }}</td>
            </tr>
            <tr>
                <td>Catégorie</td>
                <td>{{ $product->categories_id }}</td>
            </tr>
            <tr>
                <td>Actions</td>
                <td>
                    <a href="{{ url('backoffice/edit', $product->id) }}" class="textDecoration"><button type="submit">Éditer</button></a>
                    <form action="{{ url('/backoffice/delete', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        </table>
    </x-slot:content>
</x-layoutBack>