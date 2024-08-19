<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Email</title>
</head>
<body>
    <form action="/verifyemail/{{ $email }}" method="post">
        @csrf
    <label>otp</label>
    <input type="text" name="otp">
    @error('otp')
        <p>{{ $message }}</p>
    @enderror
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>
