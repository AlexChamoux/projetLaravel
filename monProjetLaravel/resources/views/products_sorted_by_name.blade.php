<!DOCTYPE html>
<html>
<head>
    <title>Products Sorted by Name</title>
</head>
<body>
<h1>Products Sorted by Name</h1>
<ul>
    @foreach ($products as $product)
        <li>{{ $product->name }}</li>
    @endforeach
</ul>
</body>
</html>