<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/update/{{$data->id}}">
        @csrf
        Name:<input type="text" name="name" value="{{ $data->name }}"><br><br>
        Email:<input type="email" name="email" value="{{ $data->email }}"><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>