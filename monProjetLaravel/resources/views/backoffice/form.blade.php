<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $product->name ?? '') }}" >
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" required>{{ old('description', $product->description ?? '') }}</textarea>
</div>
<div class="form-group">
    <label for="price">Price</label>
    <input type="number" name="price" class="form-control" value="{{ old('price', $product->price ?? '') }}" required min="0">
</div>
<div class="form-group">
    <label for="weight">Weight</label>
    <input type="number" name="weight" class="form-control" value="{{ old('weight', $product->weight ?? '') }}" required min="0">
</div>
<div class="form-group">
    <label for="image">Image URL</label>
    <input type="text" name="image" class="form-control" value="{{ old('image', $product->image ?? '') }}" required>
</div>
<div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="number" name="quantity" class="form-control" value="{{ old('quantity', $product->quantity ?? '') }}" required min="0">
</div>
<div class="form-group">
    <label for="status">Status</label>
    <input type="number" name="status" class="form-control" value="{{ old('status', $product->status ?? '') }}" required>
</div>
<div class="form-group">
    <label for="categories_id1">Category ID</label>
    <input type="number" name="categories_id1" class="form-control" value="{{ old('categories_id1', $product->categories_id1 ?? '') }}" required>
</div>
<div class="form-group">
    <label for="pointure">Pointure</label>
    <input type="text" name="pointure" class="form-control" value="{{ old('pointure', $product->pointure ?? '') }}">
</div>
