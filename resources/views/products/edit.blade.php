<h1>Edit Product</h1>
<form action="{{ route('products.update', $product->product_id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Name:</label>
    <input type="text" name="product_name" value="{{ $product->product_name }}" required>
    <label>Other Data (JSON):</label>
    <textarea name="other_data">{{ $product->other_data }}</textarea>
    <button type="submit">Update</button>
</form>
