<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 30px;
        }

        .profile-info {
            margin-bottom: 20px;
            text-align: left;
        }

        .profile-info label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-size: 14px;
        }

        .profile-info p {
            margin: 0;
            padding: 12px;
            background-color: #f7f8fa;
            border-radius: 8px;
            border: 1px solid #e2e3e5;
            font-size: 16px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .edit-btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 3px 6px rgba(0, 123, 255, 0.3);
            width: 42%; /* Adjusted width to allow for more space between buttons */
            margin-left: 4%; /* Adds space between buttons */
        }

        .edit-btn:first-child {
            margin-left: 0; /* Ensure the first button has no left margin */
        }

        .edit-btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Your Profile</h1>

        <div class="profile-info">
            <label>Name:</label>
            <p>{{ $profile->name }}</p>
        </div>

        <div class="profile-info">
            <label>Email:</label>
            <p>{{ $profile->email }}</p>
        </div>

        <div class="profile-info">
            <label>Phone Number:</label>
            <p>{{ $profile->phone_number }}</p>
        </div>

        <div class="profile-info">
            <label>Address:</label>
            <p>{{ $profile->address }}</p>
        </div>

        <div class="profile-info">
            <label>City:</label>
            <p>{{ $profile->city }}</p>
        </div>

        <div class="profile-info">
            <label>State:</label>
            <p>{{ $profile->state }}</p>
        </div>

        <div class="profile-info">
            <label>Zip Code:</label>
            <p>{{ $profile->zip_code }}</p>
        </div>

        <div class="button-container">
            <a href="/editprofile" class="edit-btn">Edit Profile</a>
            <a href="/" class="edit-btn">Go Back</a>
        </div>
    </div>

</body>
</html>
