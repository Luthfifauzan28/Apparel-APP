<h1>Create Product</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="product_name" required>
    <label>Other Data (JSON):</label>
    <textarea name="other_data"></textarea>
    <button type="submit">Save</button>
</form>
