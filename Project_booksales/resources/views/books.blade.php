<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Selamat Datang di Toko Booksales</h1>

@foreach ($books as $item)
<ul>
    <li>{{ $item['title']}}</li>
    <li>{{ $item['description']}}</li>
    <li>{{ $item['price']}}</li>
    <li>{{ $item['stock']}}</li>
</ul>
@endforeach
</body>
</html>
