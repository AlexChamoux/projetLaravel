<x-layoutBack>
    <x-slot:title>Edit</x-slot:title>
    <x-slot:content>
        <form action="{{ url('/backoffice/update/' . $product->id)  }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Nom du Produit :</label>
                <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required>
            </div>
            <div>
                <label for="description">Description :</label>
                <input type="text" id="description" name="description" value="{{ old('description', $product->description) }}" required>
            </div>
            <div>
                <label for="price">Prix :</label>
                <input type="number" id="price" name="price" value="{{ old('price', $product->price) }}" required>
            </div>
            <div>
                <label for="weight">Poids :</label>
                <input type="number" id="weight" name="weight" value="{{ old('weight', $product->weight) }}" required>
            </div>
            <div>
                <label for="discount">Réduction :</label>
                <input type="number" id="discount" name="discount" value="{{ old('discount', $product->discount) }}" required>
            </div>
            <div>
                <label for="image">Url de l'image :</label>
                <input type="text" id="image" name="image" value="{{ old('image', $product->image) }}" required>
            </div>
            <div>
                <label for="quantity">Quantité restante :</label>
                <input type="number" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}" required>
            </div>
            <div>
                <label for="status">Status du produit :</label>
                <input type="number" id="status" name="status" value="{{ old('status', $product->status) }}" required>
            </div>
            <div>
                <label for="categories_id">Catégorie :</label>
                <input type="number" id="categories_id" name="categories_id" value="{{ old('categories_id', $product->categories_id) }}" required>
            </div>
            <button type="submit">Mettre à jour le Produit</button>
        </form>
    </x-slot:content>
</x-layoutBack>
