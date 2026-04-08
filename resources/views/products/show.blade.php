<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$product->title}}</title>
</head>
<body>
    <div class="container">
        <h1>{{$product->title}}</h1>
        <p>Цена:{{$product->price}}</p>
        <p>{{$product->description}}</p>
    </div>
</body>
</html>