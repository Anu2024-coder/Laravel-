<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students Data</title>
</head>
<body>

<table border="3">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>

    @foreach($data as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->email }}</td>
        <td><a href="/delete/{{ $item->id }}">Delete</a></td>
        <td><a href="/edit/{{ $item->id }}">Edit</a></td>
    </tr>
    @endforeach

</table>

</body>
</html>