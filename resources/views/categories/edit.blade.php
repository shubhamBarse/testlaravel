<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
</head>
<body>
    <h1>Edit Category</h1>
    <form method="POST" action="{{ route('categories.update', $category->category_id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $category->name }}" required>
        </div><br>

        <div>
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Enabled</option>
                <option value="2" {{ $category->status == 2 ? 'selected' : '' }}>Disabled</option>
            </select>
        </div><br>

        <div>
            <label for="parent_id">Parent Category:</label>
            <select id="parent_id" name="parent_id">
                <option value="">-- None --</option>
                @foreach($categories as $cat)
                    @if($cat->category_id != $category->category_id)
                        <option 
                            value="{{ $cat->category_id }}" 
                            {{ $category->parent_id == $cat->category_id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endif
                @endforeach
            </select>
        </div><br>


        <button type="submit">Update</button>
        <a href="{{ route('categories.index') }}">Back</a>
    </form>
</body>
</html>


