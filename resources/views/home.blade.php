<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="menu">
        <nav>
            <a href="{{ route('home') }}">Главная</a>
            <a href="{{ route('array') }}">Массивы</a>
        </nav>
    </header>
    <div class="content">
        <img src="/img/2.png" alt="" style="max-width: 300px;">
        <p>STRANICA</p>
    </div>
    <footer>
        <p>© Чулков Дмитрий, 2026</p>
    </footer>

</body>
</html>