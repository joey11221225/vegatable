<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Email</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            padding: 40px;
            border-radius: 8px;
            width: 100%;
            text-align: center;
        }

        .login-container h2 {
            color: #333;
            margin-bottom: 30px;
        }

        .login-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 8px;
            font-size: 16px;
        }

        .form-group button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="login-container">
    <form action="/verifyemail/{{ $email }}" method="post">
        @csrf
    <div class="form-group">
        <label>Otp:</label>
        <input type="text" name="otp">
    
        @error('otp')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <input type="submit" value="submit" name="submit">
    </div>
</form>
</div>
</body>
</html>
