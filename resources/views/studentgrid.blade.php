<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grid</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: url('https://source.unsplash.com/1600x900/?education') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            padding: 20px;
        }
        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 20px;
            color: #007BFF; /* Match Add Button Blue */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            background: linear-gradient(90deg, #007BFF, #4CAF50); /* Blue to Green Gradient */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient-animation 3s infinite;
        }
        @keyframes gradient-animation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .container {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .add-button {
            text-align: right;
            margin-bottom: 20px;
        }
        .add-button button {
            padding: 12px 18px;
            font-size: 16px;
            background-color: #007BFF; /* Blue */
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .add-button button:hover {
            background-color: #0056b3; /* Darker Blue */
            transform: translateY(-3px);
        }
        .add-button button:active {
            transform: translateY(0);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: center;
            font-size: 14px;
        }
        th {
            background-color: #007BFF;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:nth-child(odd) {
            background-color: #ffffff;
        }
        tr:hover {
            background-color: #eaf2ff;
        }
        td img {
            border-radius: 50%;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 80px;
            height: 80px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        td img:hover {
            transform: scale(1.2);
        }
        .action-buttons button {
            padding: 8px 14px;
            margin: 2px;
            border: none;
            color: white;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-edit {
            background-color: #4CAF50; /* Green */
        }
        .btn-edit:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }
        .btn-delete {
            background-color: #f44336; /* Red */
        }
        .btn-delete:hover {
            background-color: #e53935;
            transform: translateY(-2px);
        }
        form {
            display: inline-block;
        }
        @media (max-width: 768px) {
            table {
                font-size: 12px;
            }
            .add-button button {
                width: 100%;
            }
            td img {
                width: 50px;
                height: 50px;
            }
        }
    </style>
</head>
<body>
    <h1>Student Portal</h1>
    <div class="container">
        <div class="add-button">
            <button onclick="location.href='/newstudent'">Add New Student</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Action</th>
                    <th>Image</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->phone_number }}</td>
                        <td>{{ $student->email }}</td>
                        <td class="action-buttons">
                            <button class="btn-edit" onclick="location.href='/edit/{{ $student->id }}'">Edit</button>
                            <form action="/delete/{{ $student->id }}" method="POST" style="display:inline;">
                                @csrf
                                <button class="btn-delete" type="submit" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                            </form>
                        </td>
                        <td>
                            <!-- Check if image exists and display it -->
                            @if($student->image_path)
                                <img src="{{ asset('storage/'.$student->image_path) }}" alt="Student Image">
                            @else
                                <p>No Image</p>
                            @endif
                        </td>
                        <td>
                            <!-- Display the first city's name -->
                            @if($student->addresses->isNotEmpty())
                                {{ $student->addresses->first()->city }}
                            @else
                                No Address
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No students found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>








