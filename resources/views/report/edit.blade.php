<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Редактирование заявления</h1>
    
    <form action="{{ route('reports.update', $report) }}" method="POST">
        @csrf
        @method('put')
        
        <label>Номер автомобиля</label>
        <input type="text" name="car_number" value="{{ $report->car_number }}" required>
        
        <label>Описание заявки</label>
        <textarea name="description" required>{{ $report->description }}</textarea>
        
        <button type="submit">Обновить</button>
    </form>
</div>
</body>
</html>