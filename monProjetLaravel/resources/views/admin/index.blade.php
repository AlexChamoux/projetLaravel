<x-layoutBack>
    <x-slot:title>Listes des produits</x-slot:title>
    <x-slot:content>
        <table>
            <tr>
                <th>Nom du produit</th>
                <th>Action</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>
                        <a href="{{ url('backoffice/edit', $product->id) }}" class="textDecoration"><button class="btn-info">Éditer</button></a>
                        <form action="{{ url('/backoffice/delete', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn-info">Supprimer</button>
                        </form>
                    </td>
                    <td><a href="{{ url('backoffice/show', $product->id) }}" class="textDecoration"><button class="btn-info">Voir en Détail</button></a></td>
                </tr>
            @endforeach

        </table>

        <button><a href="{{ url('/backoffice/create') }}" class="textDecoration">Ajouter un nouveau produit</a></button>
    </x-slot:content>
</x-layoutBack>