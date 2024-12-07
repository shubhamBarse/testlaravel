<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Information</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #6a11cb, #2575fc),
                url('https://source.unsplash.com/1600x900/?school,education') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        /* Form Container */
        .form-container {
            background: rgba(255, 255, 255, 0.9);
            /* inear-gradient(135deg, #6a11cb, #2575fc */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            animation: fadeIn 0.8s ease-in-out;
        }

        .form-container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        /* Form Elements */
        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
            outline: none;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="file"]:focus {
            border-color: #ff758c;
            box-shadow: 0 0 8px rgba(255, 117, 140, 0.5);
        }

        /* Current Image Section */
        .current-image {
            text-align: center;
            margin-bottom: 15px;
        }

        .current-image img {
            border-radius: 8px;
            border: 2px solid #ddd;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .current-image img:hover {
            transform: scale(1.05);
        }

        /* Submit Button */
        button[type="submit"] {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        button[type="submit"]:hover {
            background: linear-gradient(135deg, #ff5477, #ff375c);
            transform: translateY(-2px);
        }

        button[type="submit"]:active {
            transform: translateY(0);
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .form-container {
                padding: 20px;
            }

            .form-container h1 {
                font-size: 20px;
            }

            input[type="text"],
            input[type="email"],
            input[type="file"] {
                font-size: 13px;
            }

            button[type="submit"] {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Update Student Information</h1>
        <form action="/updatestudent/{{ $student->id }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Name Field -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $student->name }}" required>

            <!-- Email Field -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $student->email }}" required>

            <!-- Phone Number Field -->
            <label for="phone_number">Phone:</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ $student->phone_number }}" required>

            <!-- Current Image and Update Image -->
            <div class="current-image">
                @if ($student->image_path)
                    <p>Current Image:</p>
                    <label for="profile_image" style="cursor: pointer;">
                        <img src="{{ asset('storage/' . $student->image_path) }}" alt="Student Image" width="100" height="100" title="Click to change image">
                    </label>
                    <input type="file" id="profile_image" name="profile_image" style="display: none;">
                @else
                    <label for="profile_image">Upload Image:</label>
                    <input type="file" id="profile_image" name="profile_image" required>
                @endif
            </div>

            <!-- Submit Button -->
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>



