<!DOCTYPE html>
<html>
<head>
    <title>Products Sorted by Price</title>
</head>
<body>
<h1>Products Sorted by Price</h1>
<ul>
    @foreach ($products as $product)
        <li>{{ $product->name }} - {{ $product->price }}</li>
    @endforeach
</ul>
</body>
</html>