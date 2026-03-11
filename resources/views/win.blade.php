<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница</title>
      @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>след страница</h1>    
    <p>{{$num+10}}</p>
    <p>{{$str.',worl'}}</p>
    <div> @for ($i = 0; $i < count($mas); $i++)
        <p>{{ $mas[$i] }}</p>
        @endfor
    </div>

</body>
</html>