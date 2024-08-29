<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            font-weight: 600;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
            color: #333;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        input[type="number"]:focus {
            border-color: #66afe9;
            outline: none;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        input[type="submit"] {
            padding: 12px;
            background-color: #27d5de;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            flex: 1;
            margin-right: 10px;
        }

        input[type="submit"]:hover {
            background-color: #38b8c4;
        }

        .back-btn {
            padding: 12px;
            background-color: #27d5de;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
            flex: 1;
            margin-left: 10px;
        }

        .back-btn:hover {
            background-color: #38b8c4;
        }

        @media (max-width: 480px) {
            .container {
                padding: 20px;
                max-width: 90%;
            }

            h1 {
                font-size: 20px;
            }

            .button-group {
                flex-direction: column;
            }

            input[type="submit"],
            .back-btn {
                font-size: 14px;
                padding: 10px;
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Edit Your Profile</h1>

        <form action="/edit/{{ $profile->id }}" method="post">
            @csrf
            @method('PUT')

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $profile->name) }}">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $profile->email) }}">

            <label for="phone_number">Phone Number:</label>
            <input type="tel" name="phone_number" id="phone_number" value="{{ old('phone_number', $profile->phone_number) }}">

            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="{{ old('address', $profile->address) }}">

            <label for="city">City:</label>
            <input type="text" name="city" id="city" value="{{ old('city', $profile->city) }}">

            <label for="state">State:</label>
            <input type="text" name="state" id="state" value="{{ old('state', $profile->state) }}">

            <label for="zip_code">Zip Code:</label>
            <input type="number" name="zip_code" id="zip_code" value="{{ old('zip_code', $profile->zip_code) }}">

            <div class="button-group">
                <input type="submit" value="Update Profile">
                <a href="/profile/{{ $profile->id }}" class="back-btn">Back to Profile</a>
            </div>
        </form>
    </div>

</body>
</html>
