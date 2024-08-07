<form action="/cart" method="post" class="custom-thumbnail">
    <h3 class="mb-3 text-center">{{ $product->name }}</h3>

    <div class="image-container">
        <img src="{{ asset($product->image) }}" id="product-image" alt="Photo de {{ $product->name }}">
    </div>

    <div class="details mt-3">
        <div class="row mb-2">
            <div class="col text-center">
                <label for="quantity-{{ $product->id }}">Quantité : </label>
                <input type="number" id="quantity-{{ $product->id }}" name="quantity" min="0" class="form-control">
            </div>
        </div>

        <p class="text-center mb-2">{{ number_format($product->price / 100, 2) }} €</p>
        <input type="hidden" name="id" value="{{ $product->id }}">
        <button type="submit" class="btn btn-danger btn-block">Ajouter au panier</button>
    </div>

</form>