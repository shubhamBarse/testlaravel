<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
    <a href="{{ route('categories.create') }}">Add Category</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Parent ID</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categoriesWithPath as $category)
            <tr>
                <td>{{ $category['category_id'] }}</td>
                <td>{{ $category['name'] }}</td>
                <td>{{ $category['status'] == 1 ? 'Enabled' : 'Disabled' }}</td>
                <td>{{ $category['parent_id'] }}</td>
                <td>{{ $category['created_at'] }}</td>
                <td>{{ $category['updated_at'] }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category['category_id']) }}">Edit</a>
                    <form method="POST" action="{{ route('categories.destroy', $category['category_id']) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>


