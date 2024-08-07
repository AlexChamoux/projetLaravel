<!-- Dans resources/views/product/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit: {{ $product->name }}</title>
</head>
<body>
<h1>{{ $product->name }}</h1>
<p><strong>Description:</strong> {{ $product->description }}</p>
<p><strong>Prix:</strong> {{ $product->price }}</p>
<p><strong>Image:</strong> <img src="{{ $product->image_url }}" alt="{{ $product->name }}" width="200"></p>
<p><strong>Poids:</strong> {{ $product->weight }}</p>
<p><strong>Quantité:</strong> {{ $product->quantity }}</p>
<p><strong>Disponible:</strong> {{ $product->is_available ? 'Oui' : 'Non' }}</p>
<p><strong>Catégorie ID:</strong> {{ $product->category_id }}</p>
<p><strong>Couleur:</strong> {{ $product->color }}</p>

<a href="{{ url('/product') }}">Retour à la liste des produits</a>
</body>
</html>
