<x-layout>
    <x-slot:title>Listes des produits</x-slot:title>
    <x-slot:content>
        <table>
            <tr>
                <th>Nom du produit</th>
                <th>Action</th>
            </tr>
            @foreach($products as $product)
                <tr>

                        <td><a href="{{ url('/backoffice/show/' . $product->id) }}">{{ $product->name }}</a></td>
                        <td>
                            <a href="{{ url('backoffice/edit', $product->id) }}">Éditer</a>
                            <form action="{{ url('/backoffice/destroy/', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>

                </tr>
            @endforeach

        </table>
    </x-slot:content>
</x-layout>