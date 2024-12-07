<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        /* Form Container */
        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
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
        input[type="password"],
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
        input[type="password"]:focus,
        input[type="file"]:focus {
            border-color: #2575fc;
            box-shadow: 0 0 8px rgba(37, 117, 252, 0.5);
        }

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
            background: linear-gradient(135deg, #5a0fbf, #1d6df2);
            transform: translateY(-2px);
        }

        button[type="submit"]:active {
            transform: translateY(0);
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
            input[type="password"],
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
        <h1>User Registration Form</h1>
        <form action="/register" method="POST" enctype="multipart/form-data">
            <!-- Laravel CSRF Protection -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Name Field -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <!-- City Field -->
            <label for="city">City:</label>
            <input type="text" id="city" name="city" required>

            <!-- Email Field -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <!-- Phone Number Field -->
            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required>

            <!-- Password Field -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <!-- Upload Image Field -->
            <label for="profile_image">Upload Profile Image:</label>
            <input type="file" id="profile_image" name="profile_image" accept="image/*">

            <!-- Submit Button -->
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>


