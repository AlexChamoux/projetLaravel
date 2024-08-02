<x-layoutBack>
    <x-slot:title>Create or Edit</x-slot:title>
    <x-slot:content>
        <form action="{{ url('/backoffice/update/' . $product->id) }}" method="POST">
            @csrf
            <div>
                <label for="name">Nom du Produit :</label>
                <input type="text" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div>
                <label for="name">Description :</label>
                <input type="text" id="description" name="description" value="{{ $product->description }}" required>
            </div>
            <div>
                <label for="price">Prix :</label>
                <input type="number" id="price" name="price" value="{{ $product->price }}" required>
            </div>
            <div>
                <label for="name">Poids :</label>
                <input type="number" id="weight" name="weight" value="{{ $product->weight }}" required>
            </div>
            <div>
                <label for="name">Réduction :</label>
                <input type="number" id="discount" name="disocunt" value="{{ $product->discount }}" required>
            </div>
            <div>
                <label for="name">Url de l'image :</label>
                <input type="text" id="image" name="image" value="{{ $product->image }}" required>
            </div>
            <div>
                <label for="name">Quantité restante :</label>
                <input type="number" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
            </div>
            <div>
                <label for="name">Status du produit :</label>
                <input type="number" id="status" name="status" value="{{ $product->status }}" required>
            </div>
            <div>
                <label for="name">Catégorie :</label>
                <input type="number" id="categories_id" name="categories_id" value="{{ $product->categories_id }}" required>
            </div>
            <button type="submit">Mettre à jour le Produit</button>
        </form>
    </x-slot:content>
</x-layoutBack>