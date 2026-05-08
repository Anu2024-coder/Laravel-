<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/register" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Name">
    @error('name') <p>{{ $message }}</p> @enderror

    <input type="email" name="email" placeholder="Email">
    @error('email') <p>{{ $message }}</p> @enderror

    <input type="password" name="password" placeholder="Password">
    
    <input type="password" name="password_confirmation" placeholder="Confirm Password">
    @error('password') <p>{{ $message }}</p> @enderror

    <input type="text" name="age" placeholder="Age">
    @error('age') <p>{{ $message }}</p> @enderror

    <button type="submit">Register</button>
</form>
</body>
</html>