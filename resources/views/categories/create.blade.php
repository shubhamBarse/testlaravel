<!DOCTYPE html>
<html>
<head>
    <title>Add Category</title>
</head>
<body>
    <h1>Add Category</h1>
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div><br>

        <div>
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="1">Enabled</option>
                <option value="2">Disabled</option>
            </select>
        </div><br>

        <div>
            <label for="parent_id">Parent Category:</label>
            <select id="parent_id" name="parent_id">
                <option value="">-- None --</option>
                @foreach($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['path'] }}</option>
                @endforeach
            </select>
        </div><br>

        <button type="submit">Save</button>
        <a href="{{ route('categories.index') }}">Back</a>
    </form>
</body>
</html>


