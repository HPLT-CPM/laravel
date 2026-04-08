<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .card img {
            max-width: 100%;
            height: 150px;
            object-fit: cover;
        }

    </style>
</head>
<body>

    <div class="menu">
        <a href="{{ route('home') }}">Главная</a>
        <a href="{{ route('array') }}">Массивы</a>
    </div>

    <h1>Товары</h1>
    <div class="actions">
        <a href="{{ route('array.shuffle') }}">Перемешать</a>
        <a href="{{ route('array.sort') }}">Сортировать по цене</a>
        <a href="{{ route('array.filter') }}">Дешевле 1000 ₽</a>
    </div>
    <div class="products-grid">
        @foreach($array as $item)
            <div class="card">
                <img src="{{ $item['path'] }}" alt="{{ $item['title'] }}">
                
                <h3>{{ $item['title'] }}</h3>
                <p>Цена: {{ $item['price'] }} ₽</p>
            </div>
        @endforeach
    </div>
    <footer>
        <p>© Чулков Дмитрий, 2026</p>
    </footer>

</body>
</html>