<x-layoutBack>
    <x-slot:title>Ajouter un nouveau produit</x-slot:title>
    <x-slot:content>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/backoffice/store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nom du Produit :</label>
                <input type="text" id="name" name="name" value="" required>
            </div>
            <div>
                <label for="description">Description :</label>
                <input type="text" id="description" name="description" value="" required>
            </div>
            <div>
                <label for="price">Prix :</label>
                <input type="number" id="price" name="price" value="" required>
            </div>
            <div>
                <label for="weight">Poids :</label>
                <input type="number" id="weight" name="weight" value="" required>
            </div>
            <div>
                <label for="discount">Réduction :</label>
                <input type="number" id="discount" name="discount" value="" required>
            </div>
            <div>
                <label for="image">Url de l'image :</label>
                <input type="text" id="image" name="image" value="" required>
            </div>
            <div>
                <label for="quantity">Quantité restante :</label>
                <input type="number" id="quantity" name="quantity" value="" required>
            </div>
            <div>
                <label for="status">Status du produit :</label>
                <input type="number" id="status" name="status" value="" required>
            </div>
            <div>
                <label for="categories_id">Catégorie :</label>
                <input type="number" id="categories_id" name="categories_id" value="" required>
            </div>
            <button type="submit">Ajouter le Produit</button>
        </form>
    </x-slot:content>
</x-layoutBack>
