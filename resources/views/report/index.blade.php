<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Каталог</h1>
    
    <a href="{{ route('reports.create') }}">Создание заявления</a>

    @foreach ( $reports as $report )
    <div class="card">
        <h2>{{ $report->car_number }}</h2>
        <p>{{ $report->description }}</p>
        <p>{{ $report->created_at->format('d.m.Y H:i') }}</p>
        
        <a href="{{ route('reports.edit', $report) }}">Просмотреть</a><br>
        <a href="{{ route('reports.edit', $report) }}">Редактировать</a><br>
        
        <form action="{{ route('reports.destroy', $report) }}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Удалить" onclick="return confirm('Вы уверены?')">
        </form>
    </div>
    @endforeach

</div>
</body>
</html>