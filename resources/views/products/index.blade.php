<h1>Products</h1>
<a href="{{ route('products.create') }}">Create New Product</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Other Data</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->product_id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->other_data }}</td>
            <td>
                <a href="{{ route('products.edit', $product->product_id) }}">Edit</a>
                <form action="{{ route('products.destroy', $product->product_id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
