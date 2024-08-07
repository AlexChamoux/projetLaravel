<!-- Dans resources/views/product/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
</head>
<body>
<h1>Liste des Produits</h1>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Image</th>
        <th>Poids</th>
        <th>Quantité</th>
        <th>Disponible</th>
        <th>Catégorie ID</th>
        <th>Couleur</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td><img src="{{ $product->image_url }}" alt="{{ $product->name }}" width="100"></td>
            <td>{{ $product->weight }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->is_available ? 'Oui' : 'Non' }}</td>
            <td>{{ $product->category_id }}</td>
            <td>{{ $product->color }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
