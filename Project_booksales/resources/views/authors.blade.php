<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Author</h1>

    @foreach ($authors as $author )
    <ul>
        <li>{{$author ['name']}}</li>
        <li>{{$author ['photo']}}</li>
        <li>{{$author ['bio']}}</li>
    </ul>

    @endforeach

</body>
</html>
